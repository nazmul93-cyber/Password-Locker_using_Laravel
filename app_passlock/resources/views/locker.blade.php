<x-app-layout>
  <x-slot name="header">
          {{ __('Form') }}
  </x-slot>

      
    <div class="container" style="margin-top:5vh;">


    {{-- @if(Session::has('success')) --}}
    {{-- <div class="card card-inverse card-success text-center alert alert-success">
      <div class="card-block">
        <blockquote class="card-blockquote"> --}}
          {{-- {{Session::get('success')}} --}}
          {{-- @php --}}
            {{--  Session::forget('success'); --}}
           {{-- @endphp --}}
        {{-- </blockquote>
      </div>
    </div> --}}
    {{-- @endif  --}}



    <form action=" {{route('form')}} " method="POST">
      @csrf

      <div class="form-row">      
          <div class="col-md-6 mb-3">
            <label for="field1">Website</label>
            <input type="text" name="website" class="form-control" id="field1" placeholder="Insert Website URL" required>
            @if($errors->has('website'))
              <div class="text-danger">
                  {{$errors->first('website')}}
              </div>
            @endif
          </div>

          <div class="col-md-6 mb-3">
            <label for="field3">Email</label>
            <input type="email" name="email" class="form-control" id="field3" placeholder="Insert Email Address" required>
            @if($errors->has('email'))
              <div class="text-danger">
                  {{$errors->first('email')}}
              </div>
            @endif
            
          </div>
      </div>

      <div class="form-row">      
          
          <div class="col-md-6 mb-3">
            <label for="field5">Password</label>
            <input type="password" name="password" class="form-control" id="field5" placeholder="Insert Password" required>
            @if($errors->has('password'))
              <div class="text-danger">
                  {{$errors->first('password')}}
              </div>
            @endif
          </div>
          
          <div class="col-md-6 mb-3">
            <label for="field6">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" id="field6" placeholder="Insert Password again" required>
            @if($errors->has('confirm_password'))
              <div class="text-danger">
                  {{$errors->first('confirm_password')}}
              </div>
            @endif
          </div>
      <div>

      <button class="btn btn-success" type="submit">Submit form</button>


    </form>

</x-app-layout>