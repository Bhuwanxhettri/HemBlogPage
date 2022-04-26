<!doctype html>
<html lang="en">
  <head>
    <title>Admin DashBoard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
      <div class="container">
        <a class="navbar-brand h5 text-uppercase" href="#"> Blog Site</a>
       
    
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
            <li class="nav-item">
              <a class="nav-link" href="adminlogout">Logout</a>
            </li>
         
        
          </ul>
         

      </div>
    </nav>

    <section class="blog-post">

      <div class="row mx-5">
        <div class="col-sm-8 my-5 card p-4 bg-light">
          <h3 class="text-center text-warning">Post Your Blog </h3>
          <form action="/create" method="post">
            @csrf
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control mb-3" id="title" placeholder="Title"/>

            <textarea class="form-control" name="description my-5" id="editor"> </textarea>
            <button class="btn btn-danger px-5 mt-4 h4" type="submit">Post</button>
          </form>
        </div>
      </div>

    </section>


    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
      ClassicEditor
              .create( document.querySelector( '#editor' ),{
                   ckfinder:{
                    //  ckeditor for uplading image
                     uploadUrl:'{{ route('ckeditor.upload').'?_token='.csrf_token() }}'
                   }
              } )
              .then( editor => {
                      console.log( editor );
              } )
              .catch( error => {
                      console.error( error );
              } );
     </script> 
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>