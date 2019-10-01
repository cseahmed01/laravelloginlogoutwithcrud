<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Laravel 5.8 CRUD</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}</a></li>
      <li><a href="{{ 'logout' }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</div>

  <div class="container">
    <div class="jumbotron">

      <h3>User Registration</h3>
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      @for ($i = 0; $i < 10; $i++)
          
      @endfor
      <form class="form-horizontal" action="/userinsert" method="POST" >
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Name:</label>
          <div class="col-sm-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="phone">Phone:</label>
          <div class="col-sm-6">
            <input type="text"  name="phone" class="form-control" id="phone" placeholder="Enter Phone Number">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-6">
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Address:</label>
          <div class="col-sm-6">
            <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Description:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form>      

    </div>    
  </div>

  <div class="container">
    <h2>User Information</h2>
    <p></p>            
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Mobile</th>
          <th>Email</th>
          <th>Address</th>
          <th>Action</th>

        </tr>
      </thead>
      <tbody>


        @foreach ($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->phone }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->address }}</td>
          <td>
            <a href="{{ url('delete',['id' => $user->id]) }} " type="button" class="btn-danger">Delete</a>||<a href="{{ url('edit',['id' => $user->id]) }} " type="button" class="btn-danger">Edit</a>
          </td>
        </tr>
        @endforeach


      </tbody>
    </table>
    {{ $users->links() }}
  </div>

</body>
</html>
