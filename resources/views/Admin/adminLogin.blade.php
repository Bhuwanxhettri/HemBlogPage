<!doctype html>
<html lang="en">
  <head>
    <title>Admin Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      

     <div class="container card p-5 shadow my-5 col-lg-4 col-sm-12 d-flex flex-column  bg-light">
         <h5 class="text-center mb-4 ">Admin Login</h6>
        <form method="post" action="{{ route('adminloginSystem') }}" class="my-5">
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
            @endif
            @csrf
            <div class="mb-3 ">
              <label for="uname" class="form-label h6">User Name</label>
              <input type="text" class="form-control" id="uname" name="uname" aria-describedby="emailHelp"  value="{{ old('uname') }}">
              <span class="text-danger">
                @error('uname')
                    {{ $message }}
                @enderror
              </span>
            </div>


            <div class="mb-3 ">
              <label for="exampleInputPassword1" class="form-label h6">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password"  value="{{ old('password') }}">
              <span class="text-danger">
                @error('password')
                    {{ $message }}
                @enderror
              </span>
            </div>
          
            <button type="submit" class="btn btn-warning  px-5 ">Login</button>
          </form>

     </div>
   
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>