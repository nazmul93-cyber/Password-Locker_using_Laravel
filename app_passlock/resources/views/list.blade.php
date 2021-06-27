
 <x-app-layout>
    <x-slot name="header">
            {{ __('List') }}
    </x-slot>

        <div class="container" style="margin-top:5vh;">


            @if(Session::has('success'))
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
            @endif

            
            <form action="/dashboard/list" method="POST">
                @csrf
                <div class="form-row">      
                    <div class="col-md-4 mb-3">
                        <label for="field1">Search</label>
                        <input type="text" name="search" class="form-control" id="field1" placeholder="Search Website URL" required>
                
                        <button class="btn btn-primary" type="submit">Search</button>   
                    </div>
                </div>
            </form> <br />

            <div class="table-responsive">

                    <table class="table table-hover ">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">website</th>
                            <th scope="col">Email</th>
                            <th scope="col">odekha</th>
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
                                    <td scope="row"> 
                                        <i class="fas fa-eye"></i> 
                                    </td>
                                    <td scope="row">{{$row->password}}</td>
                                    <td scope="row">
                                        <a href="/delete/{{$row->id}}" style="color:#c0392b;margin:5px;"><i class="far fa-trash-alt"></i></a>

                                        <a href="/edit/{{$row->id}}" style="color:#1abc9c;margin:5px;"><i class="far fa-edit"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php $i++; ?>
                        @endforeach



                    </table>
            </div>

            
            {{$klist->links()}}
       

            <!-- css style to remove the arrows -->
            {{-- <style> --}}
                {{-- .w-5 { --}}
                     {{-- display: none; --}}
                {{-- } --}}
            {{-- </style> --}}




            <blockquote class="blockquote">
                <p class="mb-0 mt-5">
                    please<a href=" {{route('form')}} " style="text-decoration:none; color:rgb(19, 136, 87); "> click </a>here to lock more passwords
                </p>
            </blockquote>
        
        




                <a data-toggle="collapse" href="#multiCollapseExample1"  >Toggle first element</a>
                
                    <div class=" collapse " id="multiCollapseExample1">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                        
                    </div>
                
        </div>




</x-app-layout>

