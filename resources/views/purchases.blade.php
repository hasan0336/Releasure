<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Purchases | Releasur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
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
                <li class="active">
                  <a href="purchases.html">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                    &nbsp; Purchases
                  </a>
                </li>
                <li>
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

              <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="purchase-box">
                  <img src="img/art-gallery.jpg" class="img-responsive purchase-img">
                  <button class="btn btn-default release-btn">RELEASE</button>
                  <h3>John Doe 
                    <span>
                      <img src="img/user2-160x160.jpg" class="img-circle pull-right img-responsive" alt="User Image">
                    </span>
                  </h3>
                  <p class="purchases-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                  <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                  <p class="purchases-text"><i class="glyphicon glyphicon-calendar"></i> Jan 01 2018 at 5:00pm</p>
                </div>
              </div><!--/span-->

              <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="purchase-box">
                  <img src="img/art-gallery.jpg" class="img-responsive purchase-img">
                  <button class="btn btn-default release-btn">RELEASE</button>
                  <h3>John Doe
                    <span>
                      <img src="img/user2-160x160.jpg" class="img-circle pull-right img-responsive" alt="User Image">
                    </span>
                  </h3>
                  <p class="purchases-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                  <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                  <p class="purchases-text"><i class="glyphicon glyphicon-calendar"></i> Jan 01 2018 at 5:00pm</p>
                </div>
              </div><!--/span--> 

              <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="purchase-box">
                  <img src="img/art-gallery.jpg" class="img-responsive purchase-img">
                  <button class="btn btn-default release-btn">RELEASE</button>
                  <h3>John Doe
                    <span>
                      <img src="img/user2-160x160.jpg" class="img-circle pull-right img-responsive" alt="User Image">
                    </span>
                  </h3>
                  <p class="purchases-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                  <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                  <p class="purchases-text"><i class="glyphicon glyphicon-calendar"></i> Jan 01 2018 at 5:00pm</p>
                </div>
              </div>

              <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="purchase-box">
                  <img src="img/art-gallery.jpg" class="img-responsive purchase-img">
                  <button class="btn btn-default release-btn">RELEASE</button>
                  <h3>John Doe 
                    <span>
                      <img src="img/user2-160x160.jpg" class="img-circle pull-right img-responsive" alt="User Image">
                    </span>
                  </h3>
                  <p class="purchases-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                  <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                  <p class="purchases-text"><i class="glyphicon glyphicon-calendar"></i> Jan 01 2018 at 5:00pm</p>
                </div>
              </div><!--/span-->

              <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="purchase-box">
                  <img src="img/art-gallery.jpg" class="img-responsive purchase-img">
                  <button class="btn btn-default release-btn">RELEASE</button>
                  <h3>John Doe
                    <span>
                      <img src="img/user2-160x160.jpg" class="img-circle pull-right img-responsive" alt="User Image">
                    </span>
                  </h3>
                  <p class="purchases-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                  <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                  <p class="purchases-text"><i class="glyphicon glyphicon-calendar"></i> Jan 01 2018 at 5:00pm</p>
                </div>
              </div>

              <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="purchase-box">
                  <img src="img/art-gallery.jpg" class="img-responsive purchase-img">
                  <button class="btn btn-default release-btn">RELEASE</button>
                  <h3>John Doe 
                    <span>
                      <img src="img/user2-160x160.jpg" class="img-circle pull-right img-responsive" alt="User Image">
                    </span>
                  </h3>
                  <p class="purchases-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                  <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                  <p class="purchases-text"><i class="glyphicon glyphicon-calendar"></i> Jan 01 2018 at 5:00pm</p>
                </div>
              </div>

              <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="purchase-box">
                  <img src="img/art-gallery.jpg" class="img-responsive purchase-img">
                  <button class="btn btn-default release-btn">RELEASE</button>
                  <h3>John Doe 
                    <span>
                      <img src="img/user2-160x160.jpg" class="img-circle pull-right img-responsive" alt="User Image">
                    </span>
                  </h3>
                  <p class="purchases-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                  <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                  <p class="purchases-text"><i class="glyphicon glyphicon-calendar"></i> Jan 01 2018 at 5:00pm</p>
                </div>
              </div>

              <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="purchase-box">
                  <img src="img/art-gallery.jpg" class="img-responsive purchase-img">
                  <button class="btn btn-default release-btn">RELEASE</button>
                  <h3>John Doe 
                    <span>
                      <img src="img/user2-160x160.jpg" class="img-circle pull-right img-responsive" alt="User Image">
                    </span>
                  </h3>
                  <p class="purchases-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                  <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                  <p class="purchases-text"><i class="glyphicon glyphicon-calendar"></i> Jan 01 2018 at 5:00pm</p>
                </div>
              </div>

            </div><!--/span-->

          </div><!--/row-->

        </div><!--/span-->

      </div><!--/row-->
    </div><!--/.fluid-container-->
  </div>

  <!-- Javascript
  ================================================== -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
      $(".submenu").hide();
      $(".setting-btn").click(function(){
        $(".submenu").slideToggle("slow")});
    });
  </script>

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

  </body>
</html>
