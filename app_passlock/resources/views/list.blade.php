<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passlock list</title>

    <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

    <body>

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

            
            <!-- <form action="/dashboard/list" method="POST">
                @csrf
                <div class="form-row">      
                    <div class="col-md-4 mb-3">
                        <label for="field1">Search</label>
                        <input type="text" name="serach" class="form-control" id="field1" placeholder="Search Website URL" required>
                
                        <button class="btn btn-primary" type="submit">Search</button>   
                    </div>
                </div>
            </form> <br /> -->



            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">website</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                    </tr>
                </thead>
    
                <?php $i = 1;?>

                @foreach($klist as $row)
                <tbody>
                    <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$row->website}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->password}}</td>
                    <td>
                        <!-- <a href="/delete/{{$row->id}}"><button type="button" class="btn btn-danger">Delete</button></a>  -->

                        <a href="/delete/{{$row->id}}" style="color:#c0392b;margin:5px;"><i class="far fa-trash-alt"></i></a>

                        <a href="/edit/{{$row->id}}" style="color:#1abc9c;margin:5px;"><i class="far fa-edit"></i></a>
                    </td>
                    </tr>
                </tbody>
                <?php $i++; ?>
                @endforeach



            </table>


            
        {{$klist->links()}}
       

        <!-- css style to remove the arrows -->
        <style>
            .w-5 {
                display: none;
            }
        </style>




            <blockquote class="blockquote">
                <p class="mb-0 mt-5">
                    please<a href="/dashboard/formlock" style="text-decoration:none"> click </a>here to lock more passwords
                </p>
            </blockquote>
        
        </div>
        <!-- bootstrap js cdn -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>