<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid mt-5">
      <div class="container">
        <div class="row">
          <div class="con-md-7 mx-auto">
            <h2>
              All Students
            </h2>
            <table class="table table-striped">
              <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Class</td>
                <td>Manage</td>
              </tr>
              @foreach ($data as $single_data)
              <tr>
                <td>{{ $single_data->id}}</td>
                <td>{{ $single_data->name}}</td>
                <td>{{ $single_data->email}}</td>
                <td>{{ $single_data->class}}</td>
                <td>
                  <a href="{{ route('home.show',$single_data->id) }}" class="btn btn-info">View</a>
                </td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>