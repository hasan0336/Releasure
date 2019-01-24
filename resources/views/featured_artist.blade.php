<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Featured Artist | Releasur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
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

              <!-- Start of 1st image -->
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="featured-slideshow">
                  <div class="featured-flip1">
                    <img src="img/person1.jpg" alt="Avatar" class="image">
                    <div class="featured-overlay">
                      <h2 class="featured-heading">Image 1</h2>
                      <div class="featured-chat-img">
                        <a href="#" class="addClass">
                          <img src="img/chat.png">
                        </a>
                      </div>
                      <p class="featured-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus</p>
                    </div>
                  </div>
                  <div class="featured-flip11">
                    <img src="img/person2.jpg" alt="Avatar" class="image">
                    <div class="featured-overlay">
                      <h2 class="featured-heading">Sub Image 1</h2>
                      <div class="featured-chat-img">
                        <a href="#" class="addClass">
                          <img src="img/chat.png">
                        </a>
                      </div>
                      <p class="featured-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- //End of 1st image -->

              <!-- Start of 2nd image -->
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="featured-slideshow1">
                  <div class="featured-flip2">
                    <img src="img/person3.jpg" alt="Avatar" class="image">
                    <div class="featured-overlay">
                      <h2 class="featured-heading">Image 2</h2>
                      <div class="featured-chat-img">
                        <a href="#" class="addClass">
                          <img src="img/chat.png">
                        </a>
                      </div>
                      <p class="featured-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus</p>
                    </div>
                  </div>
                  <div class="featured-flip22">
                    <img src="img/person4.jpg" alt="Avatar" class="image">
                    <div class="featured-overlay">
                      <h2 class="featured-heading">Sub Image 2</h2>
                      <div class="featured-chat-img">
                        <a href="#" class="addClass">
                          <img src="img/chat.png">
                        </a>
                      </div>
                      <p class="featured-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- //End of 2nd image -->

              <!-- Start of 3rd image -->
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="featured-slideshow">
                  <div class="featured-flip3">
                    <img src="img/person5.jpg" alt="Avatar" class="image">
                    <div class="featured-overlay">
                      <h2 class="featured-heading">Image 3</h2>
                      <div class="featured-chat-img">
                        <a href="#" class="addClass">
                          <img src="img/chat.png">
                        </a>
                      </div>
                      <p class="featured-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus</p>
                    </div>
                  </div>
                  <div class="featured-flip33">
                    <img src="img/person6.jpg" alt="Avatar" class="image">
                    <div class="featured-overlay">
                      <h2 class="featured-heading">Sub Image 3</h2>
                      <div class="featured-chat-img">
                        <a href="#" class="addClass">
                          <img src="img/chat.png">
                        </a>
                      </div>
                      <p class="featured-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- //End of 3rd image -->

              <!-- Start of 4th image -->
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="featured-slideshow1">
                  <div class="featured-flip4">
                    <img src="img/person7.jpg" alt="Avatar" class="image">
                    <div class="featured-overlay">
                      <h2 class="featured-heading">Image 4</h2>
                      <div class="featured-chat-img">
                        <a href="#" class="addClass">
                          <img src="img/chat.png">
                        </a>
                      </div>
                      <p class="featured-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus</p>
                    </div>
                  </div>
                  <div class="featured-flip44">
                    <img src="img/person8.jpg" alt="Avatar" class="image">
                    <div class="featured-overlay">
                      <h2 class="featured-heading">Sub Image 4</h2>
                      <div class="featured-chat-img">
                        <a href="#" class="addClass">
                          <img src="img/chat.png">
                        </a>
                      </div>
                      <p class="featured-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- //End of 4th image -->

              <!-- Start of 5th image -->
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="featured-slideshow1">
                  <div class="featured-flip5">
                    <img src="img/person8.jpg" alt="Avatar" class="image">
                    <div class="featured-overlay">
                      <h2 class="featured-heading">Image 5</h2>
                      <div class="featured-chat-img">
                        <a href="#" class="addClass">
                          <img src="img/chat.png">
                        </a>
                      </div>
                      <p class="featured-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus</p>
                    </div>
                  </div>
                  <div class="featured-flip55">
                    <img src="img/person7.jpg" alt="Avatar" class="image">
                    <div class="featured-overlay">
                      <h2 class="featured-heading">Sub Image 5</h2>
                      <div class="featured-chat-img">
                        <a href="#" class="addClass">
                          <img src="img/chat.png">
                        </a>
                      </div>
                      <p class="featured-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- //End of 5th image -->

              <!-- Start of 6th image -->
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="featured-slideshow">
                  <div class="featured-flip6">
                    <img src="img/person6.jpg" alt="Avatar" class="image">
                    <div class="featured-overlay">
                      <h2 class="featured-heading">Image 6</h2>
                      <div class="featured-chat-img">
                        <a href="#" class="addClass">
                          <img src="img/chat.png">
                        </a>
                      </div>
                      <p class="featured-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus</p>
                    </div>
                  </div>
                  <div class="featured-flip66">
                    <img src="img/person5.jpg" alt="Avatar" class="image">
                    <div class="featured-overlay">
                      <h2 class="featured-heading">Sub Image 6</h2>
                      <div class="featured-chat-img">
                        <a href="#" class="addClass">
                          <img src="img/chat.png">
                        </a>
                      </div>
                      <p class="featured-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- //End of 6th image -->

              <!-- Start of 7th image -->
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="featured-slideshow1">
                  <div class="featured-flip7">
                    <img src="img/person4.jpg" alt="Avatar" class="image">
                    <div class="featured-overlay">
                      <h2 class="featured-heading">Image 7</h2>
                      <div class="featured-chat-img">
                        <a href="#" class="addClass">
                          <img src="img/chat.png">
                        </a>
                      </div>
                      <p class="featured-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus</p>
                    </div>
                  </div>
                  <div class="featured-flip77">
                    <img src="img/person3.jpg" alt="Avatar" class="image">
                    <div class="featured-overlay">
                      <h2 class="featured-heading">Sub Image 7</h2>
                      <div class="featured-chat-img">
                        <a href="#" class="addClass">
                          <img src="img/chat.png">
                        </a>
                      </div>
                      <p class="featured-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- //End of 7th image -->

              <!-- Start of 8th image -->
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="featured-slideshow">
                  <div class="featured-flip8">
                    <img src="img/person2.jpg" alt="Avatar" class="image">
                    <div class="featured-overlay">
                      <h2 class="featured-heading">Image 8</h2>
                      <div class="featured-chat-img">
                        <a href="#" class="addClass">
                          <img src="img/chat.png">
                        </a>
                      </div>
                      <p class="featured-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus</p>
                    </div>
                  </div>
                  <div class="featured-flip88">
                    <img src="img/person1.jpg" alt="Avatar" class="image">
                    <div class="featured-overlay">
                      <h2 class="featured-heading">Sub Image 8</h2>
                      <div class="featured-chat-img">
                        <a href="#" class="addClass">
                          <img src="img/chat.png">
                        </a>
                      </div>
                      <p class="featured-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- //End of 8th image -->

            </div>  

          </div>

        </div>
      </div>
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
    <script src="js/jquery.cycle.all.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script>
      $(document).ready(function(){
        $(".submenu").hide();
        $(".setting-btn").click(function(){
          $(".submenu").slideToggle("slow")});
      });
    </script>


    <script>
      $(function() {
        $('.featured-slideshow').cycle({
          fx: "curtainX",
          timeout: 4000,
          delay:  5000,
          sync: false
        });

        $('.featured-slideshow1').cycle({
          fx: "curtainX",
          timeout: 6000,
          delay:  5000,
          sync: false
        });
      });
    </script>

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
  </body>
</html>