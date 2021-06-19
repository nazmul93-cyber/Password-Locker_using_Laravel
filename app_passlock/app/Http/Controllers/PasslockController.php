<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passlock;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;



class PasslockController extends Controller
{

    public function formIt() {

        return view("locker");
    }
    public function lockIt(Request $request) {

        // return ["key" => "value"];

        // return Passlock::all();

        // dd($request);


        $validated = $request->validate([
            'website'=>'required|url',
            'email'=>'required|email',     
            'password'=>'required|min:8|max:18|alpha_num',    
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
        $list = Passlock::Paginate(10);



        // $website = $request->search;
        // // $list = Passlock::where('website','like','%'.$website.'%')->paginate(5); 
        // $list = Passlock::where('website','like','%'.$website.'%'); 

        // dd($list[0]->password);
        // dd($list);
        // dd(count($list));

        // decryption for user
        for($i=0;$i<count($list);$i++) {
            $list[$i]->password = Crypt::decrypt($list[$i]->password);
        }

        // dd($list);


        return view("list",["klist" => $list]);
    }

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
            'password'=>'required|min:8|max:18|alpha_num',    
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
}
