<style>
    .list-style{
        height: 90vh;
        /* background-color: rgba(141, 210, 140, 0.1); */
        
    }
</style>
   

 <x-app-layout>
    <x-slot name="header">
            {{ __("List of all the account's") }}
    </x-slot>

        <div class="list-style col">

            <form action=" {{route('list')}} " method="POST">
                @csrf

                <div class="d-flex justify-content-center py-5">    
                    {{-- offset-md-2 offset-lg-2 col-sm-12 col-md-6 col-lg-6  --}}
                    <div class=" col-sm-5  col-lg-5">
                        <input type="text"  name="search" class="form-control" id="field1" placeholder="Search inserted Website URL" required>
                        
                    </div>
                    <div class="  ml-3 col-sm-3 col-lg-2" >
                        <button class="btn btn-primary  col-lg-12" type="submit">Search</button>   

                    </div>
                </div>

            </form>

            <div class="table-responsive">

                    <table class="table table-hover ">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">website</th>
                            <th scope="col">Email</th>
                            <th scope="col-md ">hide/unhide</th>
                            <th scope="col">Password</th>
                            <th scope="col">Operation</th>
                            </tr>
                        </thead>
            
                        <?php $i = 1;?>

                        @foreach($klist as $row)
                            <tbody>
                                <tr>
                                    <th scope="row">{{$i}}</th>
                                    <td scope="row">{{$row->website}}</td>
                                    <td scope="row">{{$row->email}}</td>
                                    <td scope="row" class="sign_hide"> 
                                        <i class="text-dark fas fa-eye ml-4 "></i> 
                                    </td>
                                    <td scope="row" > <p class="row_pass" style="display: none"> {{$row->password}}</p> 
                                    <p class="prop" style="display: block">***************</p></td>
                                    <td scope="row">
                                        <a href="/delete/{{$row->id}}" ><i class="text-danger far fa-trash-alt ml-3"></i></a>

                                        <a href="/edit/{{$row->id}}" ><i class=" text-success ml-2 far fa-edit"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php $i++; ?>

                        @endforeach
                            <script type="text/javascript">
                                
                                let target_element = document.querySelectorAll('.row_pass');
                                let prop = document.querySelectorAll('.prop');
                                let hide_button = document.querySelectorAll('tr .sign_hide > i');

                               

                                for (let i = 0; i < hide_button.length; i++) {
                                    hide_button[i].addEventListener('click',()=>
                                    {


                                        if(prop[i].style.display== 'block' || target_element[i].style.display=='none' )
                                        {
                                            hide_button[i].className = "text-success fas fa-eye ml-4";
                                            prop[i].style.display = "none";
                                            target_element[i].style.display = "block";

                                        }else{
                                            hide_button[i].className = "text-dark fas fa-eye ml-4";
                                            prop[i].style.display = "block";
                                            target_element[i].style.display = "none ";
                                        }


                                    })
                                    
                                }

                            </script>



                    </table>
            </div>

            
            {{$klist->links()}}
            
       
            <p class="d-flex justify-content-end mt-2">
            <a href=" {{route('form')}} " class="btn btn-success "> Add More account password's </a>
        </p>
        
        
        <div class="col mt-5" style="">
            <x-footer></x-footer>
        </div>
    </div>

</x-app-layout>

