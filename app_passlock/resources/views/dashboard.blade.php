<style>
    .dashboard-style{
        hight was the main issue for responsive to 
        background-color: rgba(141, 210, 140, 0.1);
        
    }
</style>


<x-app-layout>
    <x-slot name="header">
            {{ __("Some info's for you") }}
    </x-slot>

    <div class="container-fluid  text-dark dashboard-style col ">
        <div class="row">
                <div class="h5 mt-5 offset-sm-1  col-sm-10 text-secondary">
                    <p>
                        hey {{Auth::user()->name}}
                        presuming you have the basic understanding of the web-site (as we mensiond it 
                        like thounsand's of time already) here you can find a basic instraction how the 
                        other stuff's work.
                        but if any how, you missed the introduction  <span class="text-success">click </span>here. 
                    </p>
                </div>
        </div>
            <div class="row">
                <div class="h5 mt-4 offset-sm-1 col-sm-10 text-success">
                    <p>
                    it actually is pretty simple 
                    </p>
                </div>
            </div>
        <div class="row">
           
                <div class="h5 offset-sm-1 col-sm-10 text-success">
                    <p>
                    You can add you other website's account in the 
                    Add section which you will find if you look in the 
                    navigation (menu) . you will need to fill up the form with the 
                    account information(like website's url and the 
                    password of the account you have in that particular website)
                    </p>
                    
                </div>
        </div>
        <div class="row">
            <div class="h5 mt-4 offset-sm-1 col-sm-10 text-primary ">
                <p>
                Then you can find the account password and the account name 
                in the List section will you also will find in the  navigation A.K.A menu .
                form where you will be able to add more link's if you want there is a
                button which will guid you back to the Add page
                </p>
            </div>
        </div>
        <div class="row">

            <div class="h5 mt-4 offset-sm-1 col-sm-10 text-success ">
                <p>
                And last but certenly not least ,if you had a look in the 
                navigation which i am sure you propably have you may have 
                noticed a field with you name in it we mean your username 
                if you click on to the username you can see the option for 
                loging out and the option for settings where you can find the 
                essential settings like changing your passoword for this 
                account and the username basically every information about this 
                website you can change using the settings
                </p> 
            </div>


        </div>
    </div>

            
        <div  style="" class="col">
            <x-footer></x-footer>
        </div>
    </div>

</x-app-layout>
