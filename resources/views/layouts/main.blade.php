<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
      .create{
      text-align: center;
      color: blue;
      text-transform: uppercase;
      letter-spacing: 4px;
      font-weight: bold;
  }
  
  .container{
    margin: 100px 200px 200px 600px;
    width: 30%;
    height: auto;
    
  }

  .welcome {
  padding: 70px 0;
  background: grey;
  text-align: center;
}

.button {
  display: flex;
}

.submit {
  justify-content: center;
}

.btn{
    width: 200px;
}


  </style>
</head>
<body >


    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class=" nav navbar-brand text-uppercase ms-5" href="{{ route('dashboard') }}">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class=" collapse navbar-collapse flex-row-reverse me-5" id="navbarSupportedContent">
            <ul class="navbar-nav">

                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login.index') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register.index') }}">Register</a>
                </li>
                @else

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">User</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
               

                @endguest
             
            </ul>
          </div>
        </div>
      </nav>

      
@yield('content')

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>