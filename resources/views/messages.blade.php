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
    <link rel="stylesheet" href="css/chat.css">
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
      @include('partials.home_menu_bar')
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
            @include('partials.home_side_bar')

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
                        <a href="#" class="addClass chat-img">
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
                        <a href="#" class="addClass chat-img">
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
                        <a href="#" class="addClass chat-img">                        
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
                        <a href="#" class="addClass chat-img">                        
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
                        <a href="#" class="addClass chat-img">                        
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
                        <a href="#" class="addClass chat-img">                        
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
                        <a href="#" class="addClass chat-img">                        
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
                        <a href="#" class="addClass chat-img">                        
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

     <div class="panel panel-primary mb-0 chat-box">
      <span class="glyphicon glyphicon-remove-sign close-btn"></span>
        <div class="panel-collapse collapse" id="collapseOne">
           <div class="panel-body">
              <ul class="chat">
                 <li class="left clearfix">
                    <span class="chat-img pro-pic pull-left">AF
                      <!-- <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" width="30" class="img-circle" /> -->
                    </span>
                    <div class="chat-body clearfix">
                       <div class="header">
                          <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                          <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                       </div>
                       <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                          dolor, quis ullamcorper ligula sodales.
                       </p>
                    </div>
                 </li>
                 <li class="right clearfix">
                    <span class="chat-img pro-pic pull-right">ME
                    <!-- <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" width="30" class="img-circle" /> -->
                    </span>
                    <div class="chat-body clearfix">
                       <div class="header">
                          <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                          <strong class="pull-right primary-font">Bhaumik Patel</strong>
                       </div>
                       <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                          dolor, quis ullamcorper ligula sodales.
                       </p>
                    </div>
                 </li>
                 <li class="left clearfix">
                    <span class="chat-img pro-pic pull-left">FH
                    <!-- <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" width="30" class="img-circle" /> -->
                    </span>
                    <div class="chat-body clearfix">
                       <div class="header">
                          <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                          <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
                       </div>
                       <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                          dolor, quis ullamcorper ligula sodales.
                       </p>
                    </div>
                 </li>
                 <li class="right clearfix">
                    <span class="chat-img pro-pic pull-right">WA
                    <!-- <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" width="30" class="img-circle" /> -->
                    </span>
                    <div class="chat-body clearfix">
                       <div class="header">
                          <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
                          <strong class="pull-right primary-font">Bhaumik Patel</strong>
                       </div>
                       <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                          dolor, quis ullamcorper ligula sodales.
                       </p>
                    </div>
                 </li>
              </ul>
           </div>
           <div class="panel-footer1">
              <div class="input-group">
                 <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                 <span class="input-group-btn">
                 <button class="btn btn-warning btn-sm btn-chat" id="btn-chat">
                 Send</button>
                 </span>
              </div>
           </div>
        </div>
        <!-- <span class="glyphicon glyphicon-remove-sign close-btn"></span> -->
        <div class="panel-heading" id="accordion">
           <span class="footer-pro-pic">AE</span>&emsp;<b>Hello World 12345</b>
           <div class="btn-group pull-right">
              <a type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
              <span class="glyphicon glyphicon-chevron-up"></span>
              </a>
           </div>
        </div>
     </div>

    <!-- Chat Box Ends here -->

    <footer class="inner-footer">
      <p>&copy; Releasur 2019. All Rights Reserved.</p>
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

    <script>
      $(".chat-box").hide();
      /*$(".close-btn").show();*/
      $(".chat-img").click(function(){
        $(".chat-box").show();
      });

      $(".close-btn").click(function(){
        $(".chat-box").hide();
      });

/*      $(".glyphicon-chevron-up").click(function(){
        $(".close-btn").hide();
      });*/

      $(document).ready(function(){
        $(".submenu").hide();
        $(".setting-btn").click(function(){
          $(".submenu").slideToggle("slow")});
      });
    </script>

  </body>
</html>