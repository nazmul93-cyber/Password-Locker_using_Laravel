<style>
  .locker-style{
      height: 90vh;
      background-color: rgba(141, 210, 140, 0.1);
      
  }
</style>


<x-app-layout>
  <x-slot name="header">
          {{ __('Add To The List') }}
  </x-slot>

      
    


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


    <div class="locker-style col ">
      <form action=" {{route('form')}} " method="POST">
        @csrf
            <div class="col text-muted pt-5">
                  
                  <div class="col-lg-12 col-sm-12 col-md-12 mb-3">

                      <label for="field1">the account/website url you wanna Add</label>
                      <input type="text" name="website"  class="form-control" id="field1" placeholder=" URL" required>
                        @if($errors->has('website'))
                          <div class="text-danger">
                              {{$errors->first('website')}}
                          </div>
                        @endif
                  </div>

                  <div class=" col-sm-12 col-md-12  col-lg-12   mb-3">
                      <label for="field3">The email associated with that website</label>
                      <input type="email" name="email"  class="form-control" id="field3" placeholder="Insert Email Address" required>
                        @if($errors->has('email'))
                          <div class="text-danger">
                              {{$errors->first('email')}}
                          </div>
                        @endif
                      
                  </div>  
                  
                  <div class="col-lg-12 col-sm-12 col-md-12 mb-3">
                      <label for="field5">Password</label>
                      <input type="password" name="password" class="form-control" id="field5" placeholder=" Password" required>
                      @if($errors->has('password'))
                        <div class="text-danger">
                            {{$errors->first('password')}}
                        </div>
                      @endif
                  </div>
                  
                  <div class="col-lg-12 col-sm-12 col-md-12 mb-3">
                      <label for="field6">Confirm Password</label>
                      <input type="password" name="confirm_password" class="form-control" id="field6" placeholder="Match the field with the upper/pasword field" required>
                      @if($errors->has('confirm_password'))
                        <div class="text-danger">
                            {{$errors->first('confirm_password')}}
                        </div>
                      @endif
                  </div>

                  <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                    <button class="btn btn-success col-lg-12" type="submit">Submit form</button>
                  </div>

            </div>
      </form>

    </div>
    <div style="" class="col">
        
          <x-footer ></x-footer>
        
      </div>
</x-app-layout>