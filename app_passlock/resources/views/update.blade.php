<style>
  .update-style{
      /* height: 90vh; */
      background-color: rgba(141, 210, 140, 0.1);
      
  }
</style>


<x-app-layout>
    <x-slot name="header">
            {{ __('Add To The List') }}
    </x-slot>





  <div class="update-style">
    <form action=" {{route('edit')}} " method="POST">
      @csrf
        
      <div class="col text-muted pt-5">

            <div class="col-lg-12 col-sm-12 col-md-12 mb-3">
                <label for="field1">Website</label>
                <input type="text" name="website" class="form-control" id="field1" placeholder="Insert Website URL" value="{{$fkey->website}}" required>
                @if($errors->has('website'))
                  <div class="text-danger">
                      {{$errors->first('website')}}
                  </div>
                @endif
            </div>

            <div class="col-lg-12 col-sm-12 col-md-12 mb-3">
                <label for="field3">Email</label>
                <input type="email" name="email" class="form-control" id="field3" placeholder="Insert Email Address" value="{{$fkey->email}}" required>
                @if($errors->has('email'))
                  <div class="text-danger">
                      {{$errors->first('email')}}
                  </div>
                @endif
              
            </div>    
            
            <div class="col-lg-12 col-sm-12 col-md-12 mb-3">
                <label for="field5">Password</label>
                <input type="password" name="password" class="form-control" id="field5" placeholder="Insert Password" value="" required>
                @if($errors->has('password'))
                  <div class="text-danger">
                      {{$errors->first('password')}}
                  </div>
                @endif
            </div>
            
            <div class="col-lg-12 col-sm-12 col-md-12 mb-3">
              <label for="field6">Confirm Password</label>
              <input type="password" name="confirm_password" class="form-control" id="field6" placeholder="Insert Password again" required>
              @if($errors->has('confirm_password'))
                <div class="text-danger">
                    {{$errors->first('confirm_password')}}
                </div>
              @endif
            </div>

            <input type="hidden" name="id" value="{{$fkey->id}}">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
              <button class="btn btn-success col-lg-12" type="submit">Update Your info's</button>
            </div>

        </div>
    </form>


        <div class=" fixed-bottom">
          <x-footer ></x-footer>
        </div>
  </div>
</x-app-layout>