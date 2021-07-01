{{-- @extends('layouts.app')

@section('content') --}}

<x-guest-layout>
    <section class="container-fluid" >

        <div class="row">

            <div class="col-sm-12 col-md-6" style=" height:90vh; background-color: rgb(141, 210, 140,.4)">
                    <div class="mt-5 col">
                        <h1>Password Locker</h1>
                    </div>

                    <div class="mt-5 col">
                        <h4>Welcome To Password Locker</h4>
                    </div>

                    <div class="mt-5 col-sm-6">
                        <p>
                            Say goodbye to memorizing hunreds of passwords.Now you can store you passwords
                        in one place and just remember one password 
                        </p>
                    </div>

            </div>

            <div class="col-sm-12 col-md-6 mt-5" style=" height:90vh;">

            <div class="d-flex justify-content-end  col">
                <a href=" {{route('login')}} " class="text-muted"> {{ __("already have an account?") }} </a>    
            </div>
                <div class="mt-5 ml-4">
                    <div class=" mb-4">
                        <h4>
                            Just need some info's to make your account
                        </h4>
                    </div>
                        <form  method="POST" action="{{ route('register') }}">
                            @csrf


                            <div class="form-group  ">
                                <label for="name" class=" text-md-right">{{ __('Your name ?') }}</label>

                                <div class="">
                                    <input id="name" placeholder="Your name please" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="email" class=" text-md-right">{{ __('E-Mail Address ?') }}</label>

                                <div class="">
                                    <input id="email" placeholder="Your email is important as it will be used to retrive your account" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="password" class=" text-md-right">{{ __('Your password') }}</label>

                                <div class="">
                                    <input id="password" placeholder="Make a strong password " type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="password-confirm" class=" text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="">
                                    <input id="password-confirm" placeholder="match this field with the privious one" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group  mb-0 mt-5">
                                <div class="row">
                                    <button type="submit" class="mx-3 col-sm-4 btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>

        <div class="fixed-bottom">
            <x-footer >
            </x-footer>
        </div>


    </section>   
{{-- @endsection --}}
</x-guest-layout>
