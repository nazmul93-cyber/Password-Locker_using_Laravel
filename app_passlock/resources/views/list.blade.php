
 <x-app-layout>
    <x-slot name="header">
            {{ __("List of all the account's") }}
    </x-slot>
    <style>
        .list-style{
            height: 90vh;
            background-color: rgba(141, 210, 140, 0.1);
            
        }
    </style>
       


            {{-- @if(Session::has('success'))
                <div class="card card-inverse card-success text-center alert alert-success">
                    <div class="card-block">
                        <blockquote class="card-blockquote">
                            {{Session::get('success')}}
                            @php
                                Session::forget('success');
                            @endphp
                        </blockquote>
                    </div>
                </div>
            @endif--}}

        <div class="list-style">

            <form action=" {{route('list')}} " method="POST">
                @csrf

                <div class="d-flex justify-content-center py-5">    
                    {{-- offset-md-2 offset-lg-2 col-sm-12 col-md-6 col-lg-6  --}}
                    <div class="  col-lg-5">
                        {{-- <label for="field1">Search</label> --}}
                        <input type="text"  name="search" class="form-control" id="field1" placeholder="Search inserted Website URL" required>
                        
                    </div>
                    {{-- offset-md-1 offset-lg-1 col-sm-12 col-md-2 col-lg-2  offset-md-1 offset-lg-1 --}}
                    <div class="  ml-3 col-lg-2">
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
                                        <i class="fas fa-eye"></i> 
                                    </td>
                                    <td scope="row" class="row_pass">{{$row->password}}</td>
                                    <td scope="row">
                                        <a href="/delete/{{$row->id}}" ><i class="text-danger far fa-trash-alt"></i></a>

                                        <a href="/edit/{{$row->id}}" ><i class=" text-success ml-2 far fa-edit"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php $i++; ?>

                        @endforeach
                            <script type="text/javascript">
                                
                                let target_element = document.querySelectorAll('.row_pass');
                                let hide_button = document.querySelectorAll('tr .sign_hide > i');

                                // console.log(hide_button);
                                for (let i = 0; i < hide_button.length; i++) {
                                    hide_button[i].addEventListener('click',()=>{

                                            console.log(target_element[i].setAttributeNode("type","*"));
                                        
                                    })
                                    
                                }

                                
                                
                                // console.log(hide_button,target_element);
                                
                                

                            </script>



                    </table>
            </div>

            
            {{$klist->links()}}
       
            <p class="d-flex justify-content-end mt-2">
            <a href=" {{route('form')}} " class="btn btn-success "> Add More account password's </a>
            </p>


            {{-- <blockquote class="blockquote">
                <p class="mb-0 mt-5">
                    please<a href=" {{route('form')}} " style="text-decoration:none; color:rgb(19, 136, 87); "> click </a>here to lock more passwords
                </p>
            </blockquote> --}}
        
        




                {{-- <a data-toggle="collapse" href="#multiCollapseExample1"  >Toggle first element</a>
                
                    <div class=" collapse " id="multiCollapseExample1">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                        
                    </div>
                
                </div> --}}

                <div class="col " style="bottom: 0px position:relative">
                    <x-footer></x-footer>
                </div>
        </div>


</x-app-layout>

