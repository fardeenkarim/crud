<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body>
    <div class="container-fluid mt-5">
      <div class="container">
        <div class="row">
          <div class="con-md-7 mx-auto">
            <h2>
              Add Student
            </h2>
            <form action="{{ route('home.store') }}" method="post">
              @csrf
              <input type="text" class="form-control mb-3" name="name" placeholder="Name">
              <input type="email" class="form-control mb-3" name="email" placeholder="Email">
              <input type="text" class="form-control mb-3" name="class" placeholder="Class">
              <button type="submit" class="btn btn-primary">Add Student</button>
            </form>
          </div>
        </div>
      </div>
    </div>






    @if(session('message')=='Successful')
    <script>
    swal("Good Job!", "You Added The Student!", "success");
    </script>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>