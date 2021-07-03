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
         <style>
            .owl-carousel .item {
                width:100%;
            }
            </style>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
            <script>
            jQuery(document).ready(function($){
              $('.owl-carousel').owlCarousel({
                loop:true,
                responsive:{
                  0:{
                    items:1
                  },
                  600:{
                    items:1
                  },
                  1000:{
                    items:1
                  }
                }
              })
            })
            </script>
    </head>

    <body style="background-color:rgb(141, 210, 140,0.4) ;height:90vh">
        <section >

            <div class="d-flex align-items-center flex-column pt-5">
                <div class="mt-5">
                    <h2 class="">Password Locker</h2>
                </div>
                
                <div class="my-4 container">
                    <h4 class=" offset-sm-4 col-sm-4  text-sm-center ">
                        <div class="owl-carousel owl-theme mt-5 ">
                                <div class="item">

                                        Say goodbye to memorizing hunreds of passwords.Now you can store you passwords
                                    in one place and just remember one password 
                                        
                                </div>
                                <div class="item">
                                    Some other good side and so much good stuff
                                </div>
                                <div class="item">
                                    
                                    Say goodbye to memorizing hunreds of passwords.Now you can store you passwords
                                    in one place and just remember one password 
                                </div>
                        </div> 
                        {{-- Say goodbye to memorizing hunreds of passwords.Now you can store you passwords
                        in one place and just remember one password  --}}
                        
                    </h4>
                </div>

            </div>


            
            <div  class=" d-flex justify-content-center my-5  " style="height:90vh background-color:rgb(227, 214, 214,.4)"> 


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

            

        </section>
        <div class="col mt-5">
            <x-footer >
            </x-footer>
        </div>
    </body>
</html>


 