{{-- @extends('layouts.master')

@section('title','IMS')

{{-- @endsection --}}
{{-- @section('navbar')
    @parent

@stop --}}

{{-- to inherit single content of parent we use section name of parent
@section('footer')
@parent
@endsection --}}


{{-- @section('btnType','Register')  --}}



{{-- another phase --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">

    <!-- CSS -->
    <!-- Add Material font (Roboto) and Material icon as needed -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Add Material CSS, replace Bootstrap CSS -->
    <link href="css/app.css" rel="stylesheet">
    <title>Vg</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand">Navbar</a>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </nav>
    <form action="login" method="POST" class="mx-5 my-3" style="width: 30%" >
        @csrf
        <div class="form-group">
            <label>User Name</label>
            <input type="text" class="form-control" id="userName" aria-describedby="" placeholder="User Name">
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        {{-- <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
        <button type="submit" class="btn btn-primary">Login</button>
    </form>



    {{-- to pass single line to child we use section show in parent
     @section('footer')
    <footer>vg</footer>

    @show --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <!-- Then Material JavaScript on top of Bootstrap JavaScript -->
    <script src="js/app.js"></script>
  </body>
</html>





