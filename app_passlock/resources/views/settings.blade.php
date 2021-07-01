
<style>
    .settings-style{
        /* height: 90vh; */
        background-color: rgba(141, 210, 140, 0.1);
        
    }
  </style>
  
  
  <x-app-layout>
    <x-slot name="header">
            {{ __('And this is the settings page ') }}
    </x-slot>
  

 
    <div class=" mt-2 settings-style" >

        <div class=" text-muted pt-5">

            

                <form class="col" action=" {{route('settings')}} " method="POST">
                    @csrf
                    <div class="col-lg-12 col-sm-12 col-md-12 mb-3">

                        <label for="field1">Your login email to verify it's you</label>
                          <input type="email" name="unimail" class="form-control" id="" placeholder="Your login email">
                              @if($errors->has('unimail'))
                                  <div class="text-danger">
                                      {{$errors->first('unimail')}}
                                  </div>
                              @endif
                    </div>

                    <div class="col-lg-12 col-sm-12 col-md-12 mb-3">

                        <label for="field1"> Your login password to verify it's you, i know i am repeating my-self </label>
                      
                              <input type="password" class="form-control" name="authpass" id="" placeholder="Your login password">
                              @if($errors->has('authpass'))
                                  <div class="text-danger">
                                      {{$errors->first('authpass')}}
                                  </div>
                              @endif
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 mb-3">

                        <label for="field1">Now you can change the username</label>
                      
                           
                              <input type="text" name="name" class="form-control" id="" placeholder="Your new probably creative username"> 
                              @if($errors->has('name'))
                                  <div class="text-danger">
                                      {{$errors->first('name')}}
                                  </div>
                              @endif  
                    </div>

                    <div class="col-lg-12 col-sm-12 col-md-12 mb-3">

                        <label for="field1">Here you can update your password </label>
                      
                              <input type="password" class="form-control" name="password" id="" placeholder="Set a new you password for your this account"> 
                              @if($errors->has('password'))
                                  <div class="text-danger">
                                      {{$errors->first('password')}}
                                  </div>
                              @endif  
                    </div>

                    <div class="col-lg-12 col-sm-12 col-md-12 mb-3">
                        <label for="field1">Now you need to match this field with the privious field to successfully change the password </label>
                        <input type="password" name="confirm" class="form-control" id="" placeholder="please confirm your password"> 
                            @if($errors->has('confirm'))
                                <div class="text-danger">
                                    {{$errors->first('confirm')}}
                                </div>
                            @endif 
                    </div>


                    <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                        <button class="btn btn-success col-lg-12" type="submit">Submit form</button>
                      </div>



                
                </form>
        </div>
    </div>

    <div >
        <x-footer></x-footer>
    </div>
</x-app-layout>