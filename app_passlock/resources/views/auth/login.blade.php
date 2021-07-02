<x-guest-layout>

    <section class="container-fluid " >

            <div class="row ">

                <div class="col-sm-12 col-md-6 pt-5 " style="height:92vh ; background-color: rgb(141, 210, 140,.4)">
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

                
                    <div class="col-sm-12 col-md-6  pt-5 " style=" height:92vh;">
                            <div class="d-flex justify-content-end  col">
                                <a href=" {{route('register')}} " class="text-muted"> {{ __("Don't have an account?") }} </a>    
                            </div>

                            <div class="my-5 ml-4">
                                <div class="  mb-5">
                                    <h3>
                                        Log in to your account
                                    </h3>
                                </div>
                                <form  method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group ">
                                        <label for="email" class="  text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="">
                                            <input id="email" placeholder="Your Email " type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="password" class=" text-md-right">{{ __('Password') }}</label>

                                        <div class="">
                                            <input id="password" placeholder="Your Account Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <div class=" my-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0">
                                        <div class="row">
                                            <button type="submit" class="mx-3 col-sm-5  btn btn-primary">
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class=" col-sm-5 btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                            
                        </div>

            </div>
            
            
            
        </section>    
        <div class="fixed-bottom">
            <x-footer >
            </x-footer>
        </div>
    
</x-guest-layout>

