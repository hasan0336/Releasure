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
        {{--@include('partials.menu_bar')--}}
    </div>
</nav>
<?php $user = Session::get('data'); ?>
<header class="" id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-4 margin0-auto">
                <div class="panel panel-default signup-top-bottom">
                    <div class="text-center">
                        <img src="{{asset('img/logo.png')}}" alt="Logo Image" width="100">
                        <h3 class="login-heading">
                        </h3>
                    </div>
                    <p class="login-subheading">Sign Up Page.</p>
                    <div class="panel-body">
                        <form id="login-form" action="{{ route('social_signup_details') }}" role="form" autocomplete="off" class="form" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="avatar-upload">
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="background-image: {{url('/uploads/'.$user->profile_picture)}};">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if(count( $errors ) > 0)
                                    @foreach ($errors->all() as $error)
                                        <b style="color:red"><center>{{ $error }}</center></b>
                                    @endforeach
                                @endif
                                <input type="hidden" name="user_id" value="{{$user->user_id}}">
                                    <div class="input-group">
                                        <input type="text" name="name" class="form-control" id="user_name" value="{{$user->name}}" placeholder="Name" required>
                                    </div>

                                    <div class="input-group artist">
                                    <input type="text" name="contact" class="form-control" id="contact" placeholder="Contact No.">
                                </div>

                                <div class="input-group artist">
                                    <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                                </div>

                                <div class="input-group follower">
                                    <input type="text" name="profession" class="form-control" id="profession" placeholder="Profession">
                                </div>

                                <div class="input-group follower">
                                    <input type="text" name="payment_id" class="form-control" placeholder="Payment ID">
                                </div>

                            </div>

                            <div class="form-group" style="text-align:center;color:black;">
                                <label class="radio-inline">
                                    <input type="radio" name="user_type" value="follower" class="radio_follower" checked="checked">&nbsp;Follower&emsp;
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" name="user_type" value="artist" class="radio_artist">&nbsp;Artist
                                </label>
                            </div>

                            <div class="form-group" style="text-align:center;color:black;">
                                <label class="checkbox-inline">
                                    <input type="checkbox">&nbsp;I have read and agreed Terms & Conditions and Privacy Policy
                                </label>
                            </div>
                            <div class="form-group" style="margin-bottom: 0;">
                                <button type="submit" id="login-btn" class="btn btn-lg btn-primary btn-block">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
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

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/form-main.js')}}"></script>

<script>
    $(document).ready(function(){
        $('.follower').hide();
        $(".radio_follower").click(function(){
            $(".radio_follower").attr('checked', 'checked');
            $(".radio_artist").removeAttr('checked', 'checked');
            $('.follower').hide();
            $('.artist').show();
        });

        $(".radio_artist").click(function(){
            $(".radio_artist").attr('checked', 'checked');
            $(".radio_follower").removeAttr('checked', 'checked');
            $('.follower').show();
            $('.artist').hide();
        });
    });
    $(function() {
        $('#fileInput').change(function(){
            var t = $(this).val();
            var labelText = 'File : ' + t.substr(12, t.length);
            $(this).prev('label').text(labelText);
        })
    });
</script>
</body>

</html>