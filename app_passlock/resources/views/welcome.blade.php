<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pass Locker</title>

        
         <!-- Styles -->
         <link rel="stylesheet" href="{{ asset('css/app.css') }}">

         <!-- Scripts -->
         <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <body>
        <section style="background-color:rgb(141, 210, 140,0.4) ;height:100vh">

            <div class="d-flex align-items-center flex-column pt-5">
                <div class="mt-5">
                    <h2 class="">Password Locker</h2>
                </div>
                
                <div class="my-5">
                    <h4 class=" offset-sm-4 col-sm-4  text-sm-center">
                        Say goodbye to memorizing hunreds of passwords.Now you can store you passwords
                        in one place and just remember one password 
                        
                    </h4>
                </div>

            </div>


            
            <div  class=" d-flex justify-content-center my-5  " style="height:90vh background-color:rgb(227, 214, 214,.4)"style="height:90vh background-color:rgb(227, 214, 214,.4)"> 


                {{-- links of login and registration --}}
                
                <div class="mr-5" >

                    @if (Route::has('login'))

                        <div  class="">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-secondary ">Dashboard</a>
                            @else
                                <form action=" {{route('login')}} " method="GET">
                                
                                    <button type="submit" class="btn btn-dark" >Login</button>
                                    {{-- <a href="{{ route('login') }}" class="btn btn-secondary ">Log in</a> --}}
                                
                                </form>
                            @endauth
                        </div>
                    @endif
                </div>
                <div class="" >

                    @if (Route::has('login'))

                        <div  class="">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-secondary ">Dashboard</a>
                            @else
                            
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class=" btn btn-secondary ">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>

            </div>

            

            <div class="mt-5 fixed-bottom">
                <x-footer >
                </x-footer>
            </div>
        </section>
    </body>
</html>


 