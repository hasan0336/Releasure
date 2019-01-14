<!DOCTYPE html>
<html lang="en">

@include('partials.header')

  <body id="page-top" class="pink-purple-background">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img src="{{asset('img/logo.png')}}" width="146" alt="">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        @include('partials.menu_bar')
      </div>
    </nav>

    <header class="" id="home" style="">
      <div class="container">
        <div class="row">
            <div class="col-md-4 margin0-auto">
              <div class="panel panel-default margin-top-150">
                <div class="text-center">
                    <img src="{{asset('img/logo.png')}}" alt="Logo Image" width="100">
                    <h3 class="login-heading">
                    </h3>
                </div>
                <p class="login-subheading">Reset Password</p>
                <div class="panel-body">
                  <form id="login-form" action="{{route('change_user_password')}}" role="form" autocomplete="off" class="form" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                      <div class="input-group">
                        <a class="a_img" href="#">
                          <img class="img_eye" src="{{asset('img/eye.png')}}" onclick="loginEye()">
                        </a>

                        <input id="user-password" name="user_password" placeholder="Password" class="form-control" type="password" pattern=".{8,}" title="Password should be eight or more characters" required="required">
                      </div>

                      <div class="input-group">
                        <a class="a_img" href="#">
                          <img class="img_eye" src="{{asset('img/eye.png')}}" onclick="signupEye()">
                        </a>

                        <input id="confirm-password" name="confirm_password" placeholder="Confirm Password" class="form-control" type="password" pattern=".{8,}" title="Password should be eight or more characters" required="required">
                      </div>
                    </div>
                    @if(Session::has('confirm_password'))
                    <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('confirm_password') }}</p>
                    @endif
                    <div class="form-group">
                      <input id="login-btn" name="login" class="btn btn-lg btn-primary btn-block" value="Reset" type="submit">
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>

      @include('partials.footer')

    </header>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/form-main.js')}}"></script>

  </body>

</html>