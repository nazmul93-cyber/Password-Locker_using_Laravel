


<nav class="navbar navbar-expand-lg navbar-light bg-light">
         


        {{-- the button to toggle navigation in the responsive mode --}}

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                    <!-- Navigation Links -->
                        <li class="nav-item">
                            <div class="nav-link">
                                <a href=" {{route('dashboard')}} " class="btn text-muted"> Dashboard</a>
                            </div>
                        </li>
                    <!-- Form Link -->
                    <li class="nav-item">
                        <div class="nav-link">
                            <a href=" {{route('form')}} " class="btn text-muted"> Form</a>
                        </div>
                    </li>
                
                    <!-- list Link -->
                    <li class="nav-item">
                        <div class="nav-link">
                            <a href=" {{route('list')}} " class="btn text-muted"> List</a>
                        </div>
                    </li>


                <li class="nav-item dropdown">

                    <a class="nav-link mx-2 my-2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            
                        <div class="d-flex">
                            <div>{{ Auth::user()->name }}</div>
                            <i class=" mx-1 fas fa-sort-down"></i>
                        </div>
  
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        
                            <form method="POST" action="{{ route('form') }}">
                                @csrf
                                {{-- i cant use hyperlink because of it uses get method i need post --}}
                                <button class="dropdown-item" type="submit"> {{ __('Profile') }}</button> 
                            </form>
                        
                            <form method="POST" action="{{ route('form') }}">
                                @csrf
                                {{-- i cant use hyperlink because of it uses get method i need post --}}
                                <button class="dropdown-item" type="submit"> {{ __('settings') }}</button> 
                            </form>

                            <div class="dropdown-divider"></div> 
                            
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                    {{-- i cant use hyperlink because of it uses get method i need post --}}
                                <button class="dropdown-item" type="submit"> {{ __('Log Out') }}</button> 
                            </form>
                    </div>
                </li>
                
            </ul>

        </div>
</nav>

