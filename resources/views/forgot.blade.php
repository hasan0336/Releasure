<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="img/favicon.png" />
    <title>Forgot Password | Releasur</title>

    <link rel="stylesheet" href="css/custom-bootstrap.min.css">
    <link rel="stylesheet" href="css/lato.css">
    <link rel="stylesheet" href="css/catamaran.css">
    <link rel="stylesheet" href="css/muli.css">
    <link rel="stylesheet" href="css/custom-new-age.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img src="img/logo.png" width="146" alt="">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html#about_us">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html#what_we_do">What We Do</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html#featured_artist">Featured Artist</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="signup.html">Signup</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead" id="home" style="position: fixed;">
      <div class="container">
        <div class="row">
            <div class="col-md-4 margin0-auto">
              <div class="panel panel-default margin-top-150">
                <div class="text-center">
                    <img src="img/logo.png" alt="Logo Image" width="100">
                    <h3 class="login-heading">
                    </h3>
                </div>
                <p class="login-subheading">Forgot Password Page</p>
                <div class="panel-body">
                  @if(Session::has('Forget_password'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('Forget_password') }}</p>
                  @endif
                  <form id="login-form" action="{{route('forgot_user_password')}}" role="form" autocomplete="off" class="form" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                      <div class="input-group">
                        <input id="user_email" name="user_email" placeholder="Email Address" class="form-control" type="email" required="">
                      </div>
                    </div>
                    <div class="form-group">
                      <input id="login-btn" name="login" class="btn btn-lg btn-primary btn-block" value="Reset" type="submit">
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>

      <footer style="position: fixed; bottom: 0; width: 100%;">
       <div class="container">
         <p>&copy; Releasur 2018. All Rights Reserved.</p>
         <ul class="list-inline">
           <li class="list-inline-item">
             <a href="#">Privacy</a>
           </li>
           <li class="list-inline-item">
             <a href="#">Terms</a>
           </li>
           <li class="list-inline-item">
             <a href="#">FAQ</a>
           </li>
         </ul>
       </div>
      </footer>
    </header>

    <script src="js/jquery.min.js"></script>
    <script src="js/form-main.js"></script>

  </body>

</html>