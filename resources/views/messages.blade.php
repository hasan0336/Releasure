<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Messages | Releasur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- <link rel="stylesheet" href="css/chat.css"> -->
    <link rel="stylesheet" href="css/inner-css.css">

  </head>

  <body>

  <div class="container">

    <nav class="navbar navbar-inverse navbar-setting">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">
            <img src="img/logo.png" class="img-responsive img-rounded" alt="Releasur Logo">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html#about_us">About Us</a></li>
            <li><a href="index.html#what_we_do">What We Do</a></li>
            <li><a href="index.html#featured_artist">Featured Artist</a></li>
            <li><a href="index.html#contact">Contact</a></li>
            <li>
              <a class="dropdown-toggle" data-toggle="dropdown">
                <div class="hidden-xs">Administrator&emsp;
                  <img src="img/profile_pic.jpg" class="img-circle" alt="User Image">
                </div>
              </a>

              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="img/user2.jpg" class="img-circle img-responsive" style="margin:0 auto" alt="User Image">
                  <p>Administrator<small>admin@technado.co</small></p>
                </li>

                 <li class="user-footer">
                   <div class="pull-left">
                     <a href="#" data-toggle="modal" data-target="#myModal_header" class="btn btn-default btn-flat">Profile</a>
                   </div>
                   <div class="pull-right">
                     <a href="#" class="btn btn-default btn-flat">Sign out</a>
                   </div>
                 </li>
               </ul>
            </li>
            <li>
              <form id="demo-2" class="search-bar-setting">
                <input type="search">
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>

      <div class="container margin-top20">
        <div class="col-sm-12 col-md-12 col-lg-12">

          <div class="col-sm-2 col-md-2 col-lg-2">
            <div class="navbar-header left-nav-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sideNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                     
              </button>
            </div>
            <div class="collapse navbar-collapse padding0" id="sideNavbar">
              <div class="well sidebar-nav left-sidebar" data-spy="affix" data-offset-top="110">
              <ul class="nav nav-list">
                <li>
                  <a href="home.html">
                    <i class="glyphicon glyphicon-home"></i>
                    &nbsp; Home
                  </a>
                </li>
                <li>
                  <a href="sales.html">
                    <i class="glyphicon glyphicon-stats"></i>
                    &nbsp; Sales
                  </a></li>
                <li>
                  <a href="featured_artist.html">
                    <i class="glyphicon glyphicon-star-empty"></i>
                    &nbsp; Featured Artist
                  </a>
                </li>
                <li>
                  <a href="purchases.html">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                    &nbsp; Purchases
                  </a>
                </li>
                <li class="active">
                  <a href="messages.html">
                    <i class="glyphicon glyphicon-envelope"></i>
                    &nbsp; Messages
                  </a>
                </li>
                <li>
                  <a href="payment.html">
                    <i class="glyphicon glyphicon-credit-card"></i>
                    &nbsp; Payment
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="glyphicon glyphicon-cog"></i>
                    &nbsp; Settings
                    <span class="glyphicon glyphicon-chevron-down setting-btn pull-right"></span>
                  </a>
                </li>
                <li class="submenu">
                  <a href="#">
                    <i class="glyphicon glyphicon-record"></i>
                    &nbsp; Term & Condition
                  </a>

                  <a href="#">
                    <i class="glyphicon glyphicon-record"></i>
                    &nbsp; Privacy Policy
                  </a>

                  <a href="#">
                    <i class="glyphicon glyphicon-record"></i>
                    &nbsp; FAQs
                  </a>
                </li>
              </ul>
            </div><!--/.well -->
          </div><!--/.well -->
          </div><!--/span-->

          <div class="col-sm-10 col-md-10 col-lg-10">

              <div class="col-sm-12 col-md-12 col-lg-12">

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="msg-box">
                    <img src="img/person1.jpg" class="img-responsive msg-img">
                  </div>
                  <div class="msg-overlay">
                    <div class="msg-text">
                      Hello World1
                      <span class="pull-right">
                        <a href="#" class="addClass">
                          <img src="img/chat.png" class="img-responsive" width="30">
                        </a>
                      </span>
                    </div>
                  </div>
                </div>  
                
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="msg-box">
                    <img src="img/person2.jpg" class="img-responsive msg-img">
                  </div>
                  <div class="msg-overlay">
                    <div class="msg-text">
                      Hello World2
                      <span class="pull-right">
                        <a href="#" class="addClass">
                          <img src="img/chat.png" class="img-responsive" width="30">
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="msg-box">
                    <img src="img/person3.jpg" class="img-responsive msg-img">
                  </div>
                  <div class="msg-overlay">
                    <div class="msg-text">
                      Hello World3
                      <span class="pull-right">
                        <a href="#" class="addClass">                        
                          <img src="img/chat.png" class="img-responsive" width="30">
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="msg-box">
                    <img src="img/person4.jpg" class="img-responsive msg-img">
                  </div>
                  <div class="msg-overlay">
                    <div class="msg-text">
                      Hello World4
                      <span class="pull-right">
                        <a href="#" class="addClass">                        
                          <img src="img/chat.png" class="img-responsive" width="30">
                        </a>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="msg-box">
                    <img src="img/person5.jpg" class="img-responsive msg-img">
                  </div>
                  <div class="msg-overlay">
                    <div class="msg-text">
                      Hello World5
                      <span class="pull-right">
                        <a href="#" class="addClass">                        
                          <img src="img/chat.png" class="img-responsive" width="30">
                        </a>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="msg-box">
                    <img src="img/person6.jpg" class="img-responsive msg-img">
                  </div>
                  <div class="msg-overlay">
                    <div class="msg-text">
                      Hello World6
                      <span class="pull-right">
                        <a href="#" class="addClass">                        
                          <img src="img/chat.png" class="img-responsive" width="30">
                        </a>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="msg-box">
                    <img src="img/person7.jpg" class="img-responsive msg-img">
                  </div>
                  <div class="msg-overlay">
                    <div class="msg-text">
                      Hello World7
                      <span class="pull-right">
                        <a href="#" class="addClass">                        
                          <img src="img/chat.png" class="img-responsive" width="30">
                        </a>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="msg-box">
                    <img src="img/person8.jpg" class="img-responsive msg-img">
                  </div>
                  <div class="msg-overlay">
                    <div class="msg-text">
                      Hello World8
                      <span class="pull-right">
                        <a href="#" class="addClass">                        
                          <img src="img/chat.png" class="img-responsive" width="30">
                        </a>
                      </span>
                    </div>
                  </div>
                </div>

              </div>  

          </div><!--/span-->

        </div><!--/row-->
      </div><!--/.fluid-container-->
  </div>

    <!-- Chat Box Starts here -->
     <!--  <div class="popup-box chat-popup" id="qnimate">
         <div class="popup-head">
            <div class="popup-head-left pull-left"><img src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" alt="iamgurdeeposahan"> John Doe</div>
            <div class="popup-head-right pull-right">
               <div class="btn-group">
                  <button class="chat-header-button" data-toggle="dropdown" type="button" aria-expanded="false">
                  <i class="glyphicon glyphicon-cog"></i> </button>
                  <ul role="menu" class="dropdown-menu pull-right">
                     <li><a href="#">Media</a></li>
                     <li><a href="#">Block</a></li>
                     <li><a href="#">Clear Chat</a></li>
                     <li><a href="#">Email Chat</a></li>
                  </ul>
               </div>
               <button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button"><i class="glyphicon glyphicon-off"></i></button>
            </div>
         </div>
         <div class="popup-messages">
            <div class="direct-chat-messages">
               <div class="chat-box-single-line">
                  <abbr class="timestamp">October 8th, 2015</abbr>
               </div>
               <div class="direct-chat-msg doted-border">
                  <div class="direct-chat-info clearfix">
                     <span class="direct-chat-name pull-left">John</span>
                  </div>
                  <img alt="message user image" src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" class="direct-chat-img">
                  <div class="direct-chat-text">
                     Hey how are you?
                  </div>
                  <div class="direct-chat-info clearfix">
                     <span class="direct-chat-timestamp pull-right">3.36 PM</span>
                  </div>
                  <div class="direct-chat-info clearfix">
                     <span class="direct-chat-img-reply-small pull-left">
                     </span>
                     <span class="direct-chat-reply-name">Clark</span>
                  </div>
               </div>
               <div class="chat-box-single-line">
                  <abbr class="timestamp">October 9th, 2015</abbr>
               </div>
               <div class="direct-chat-msg doted-border">
                  <div class="direct-chat-info clearfix">
                     <span class="direct-chat-name pull-left">John</span>
                  </div>
                  <img alt="iamgurdeeposahan" src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" class="direct-chat-img">
                  <div class="direct-chat-text">
                     Hey bro, how’s everything going ?
                  </div>
                  <div class="direct-chat-info clearfix">
                     <span class="direct-chat-timestamp pull-right">3.36 PM</span>
                  </div>
                  <div class="direct-chat-info clearfix">
                     <img alt="iamgurdeeposahan" src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" class="direct-chat-img big-round">
                     <span class="direct-chat-reply-name">Clark</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-messages-footer">
            <textarea id="status_message" placeholder="Type a message..." rows="10" cols="40" name="message"></textarea>
            <div class="btn-footer">
               <button class="bg_none"><i class="glyphicon glyphicon-film"></i> </button>
               <button class="bg_none"><i class="glyphicon glyphicon-camera"></i> </button>
               <button class="bg_none"><i class="glyphicon glyphicon-paperclip"></i> </button>
               <button class="bg_none pull-right"><i class="glyphicon glyphicon-thumbs-up"></i> </button>
            </div>
         </div>
      </div> -->
      <!-- Chat Box Ends here -->

    <footer class="inner-footer">
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
    </footer>

    <!-- Javascript
      ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- <script>
      $(function(){
        $(".addClass").click(function () {
          $('#qnimate').addClass('popup-box-on');
        });        
        $("#removeClass").click(function () {
          $('#qnimate').removeClass('popup-box-on');
        });
      });
    </script> -->

    <script>
      $(document).ready(function(){
        $(".submenu").hide();
        $(".setting-btn").click(function(){
          $(".submenu").slideToggle("slow")});
      });
    </script>

  </body>
</html>