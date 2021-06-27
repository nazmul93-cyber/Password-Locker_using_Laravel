<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// models
use App\Models\Passlock;
use App\Models\User;

// security
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

// new addition
use Illuminate\Support\Facades\Auth;
use Session;



class PasslockController extends Controller
{

    public function formIt() {

        return view("locker");
    }

    
    public function lockIt(Request $request) {

        $validated = $request->validate([
            'website'=>'required|url',
            'email'=>'required|email',     
            'password'=>'required',    
            'confirm_password'=>'required|same:password', 
           
        ],[
            'website.required'=>'must contain your web url',        
            'email.required'=>'must contain your email',
            'password.required'=>'must contain your password',
        ]);

        $validated['password'] = Crypt::encrypt($validated['password']);    

        Passlock::create($validated);

        return redirect('/dashboard/list')->withSuccess("Congrats!!! Your password is saved");
        
    }



    public function readIt(Request $request) {

        // $list = Passlock::all();
        // $list = Passlock::Paginate(10);


        $url = $request->search;
        $list = Passlock::where('website','like','%'.$url.'%')->paginate('15');  

        // decryption for user
        for($i=0;$i<count($list);$i++) {
            $list[$i]->password = Crypt::decrypt($list[$i]->password);
        }

        return view("list",["klist" => $list]);
    }


    // Now delete 

    public function delIt($id) {

        Passlock::find($id)->delete();

        return redirect('/dashboard/list')->withSuccess('Your record was deleted');
    }

    public function fetchIt($id) {

        $fetched = Passlock::find($id);
        return view('update',['fkey' => $fetched]);
    }

    public function upIt(Request $request) {

        $validated = $request->validate([
            'website'=>'required|url',
            'email'=>'required|email',     
            'password'=>'required',    
            'confirm_password'=>'required|same:password', 
           
        ],[
            'website.required'=>'must contain your web url',        
            'email.required'=>'must contain your email',
            'password.required'=>'must contain your password',
        ]);

        $validated['password'] = Crypt::encrypt($validated['password']);    

        Passlock::find($request->id)->update($validated);

        return redirect('/dashboard/list')->withSuccess("Congrats!!! Your record was updated");      
    }

// settings page functionality

    public function setForm() {

        return view('settings');
    }

    public function setIt(Request $request) {

        $validated = $request->validate([
            'unimail' => 'required|email|exists:users,email',
            'authpass' => 'required',
            'name' => 'required|string|max:25',
            'password' => 'required|min:8|max:20|alpha_num',
            'confirm'=>'required|same:password', 
        ],[
            'unimail.required'=>'must contain your login email',        
            'unimail.exists'=>'unregistered email address',        
            'authpass.required'=>'must contain login password',
            'password.required'=>'must contain new password',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        // dd($validated);
        // dd(User::all());
        // dd(User::where('email',$request->unimail)->first()->password);
        // dd(Hash::check($request->authpass,User::where('email',$request->unimail)->first()->password));

        if(Hash::check($request->authpass,User::where('email',$request->unimail)->first()->password)) {
            $user = User::where('email',$request->unimail)->update([
                'name' => $validated['name'],
                'password' => $validated['password'],
            ]);

            // return redirect("/dashboard");
            if($user) {

                Auth::logout();
                Session::flush();
                return redirect('/login');
            }

        }else {

            return back()->withError("Your credentials did not match");
        }

    }
}
