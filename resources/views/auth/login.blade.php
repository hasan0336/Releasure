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
                    <p class="login-subheading">Please enter your credentials to Login.</p>
                    <div class="panel-body">
                        <form id="login-form" action="{{ route('login') }}" role="form" autocomplete="off" class="form" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="user_email" name="email" placeholder="Email" class="form-control" type="email" required="">

                                </div>
                                <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <a class="a_img" href="#">
                                        <img class="img_eye" src="{{asset('img/eye.png')}}" onclick="loginEye()">
                                    </a>

                                    <input id="user-password" name="password" placeholder="Password" class="form-control" type="password" pattern=".{8,}" title="Password should be eight or more characters" required="">
                                </div>
                                <div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <b style="color:red">{{ $errors->first('password') }}</b>
                                    </span>
                                    @endif
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                         <b style="color:red">{{ $errors->first('email') }}</b>
                                      </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <input id="login-btn" name="login" class="btn btn-lg btn-primary btn-block" value="Login" type="submit">
                            </div>
                        </form>
                        <div class="col-md-12 col-xs-12" style="text-align:center;">
                            <a class="a1_link" href="{{route('forget_password')}}">Forgot Password!</a>
                        </div>
                        <div class="col-md-12 col-xs-12" style="text-align:center;margin-top:20px;">
                            <i><a href="{{url('login/facebook')}}"><img src="{{asset('img/facebook.png')}}" width="50"></a></i>
                            <i><a href="{{url('login/google')}}"><img src="{{asset('img/google_plus.png')}}" width="45"></a></i>
                            <i><a href="{{url('login/linkedin')}}"><img src="{{asset('img/linkedin.png')}}" width="50"></a></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

</header>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/form-main.js')}}"></script>
<script>
    $(document).ready(function(){
        $("#login-nav").addClass("active");
    });
</script>

</body>
</html>