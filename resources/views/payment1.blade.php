<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Payment | Releasur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="css/inner-css.css" />
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

          <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="navbar-header left-nav-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sideNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                     
              </button>
            </div>
            <div class="collapse navbar-collapse" id="sideNavbar">
              <div class="well sidebar-nav left-sidebar" data-spy="affix" data-offset-top="110">
              <ul class="nav nav-list">
                <li>
                  <a href="home.html">
                    <i class="glyphicon glyphicon-home"></i>
                    &nbsp; Home
                  </a>
                </li>
                <li class="active">
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
          </div>
          </div><!--/span-->

          <div class="col-sm-9 col-md-9 col-lg-9">

            <div class="col-sm-12 col-md-12 col-lg-12 padding0">
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="alert alert-success" role="alert">
                  <strong>Payment ID: </strong> abc@xyz.com
                </div>
              </div>

              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="alert alert-info text-right" role="alert">
                  <strong>Total Receivable Amount: </strong> $5,000
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Receiving Date</th>
                      <th scope="col">Receiving Amount</th>
                      <th scope="col">Balance</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="active">
                      <td>Jan 1 2018 at 05:00pm</td>
                      <td>$1000</td>
                      <td>$4000</td>
                    </tr>
                    <tr class="warning">
                      <td>Jan 1 2018 at 05:00pm</td>
                      <td>$1000</td>
                      <td>$4000</td>
                    </tr>
                    <tr class="active">
                      <td>Jan 1 2018 at 05:00pm</td>
                      <td>$1000</td>
                      <td>$4000</td>
                    </tr>
                    <tr class="warning">
                      <td>Jan 1 2018 at 05:00pm</td>
                      <td>$1000</td>
                      <td>$4000</td>
                    </tr>
                    <tr class="active">
                      <td>Jan 1 2018 at 05:00pm</td>
                      <td>$1000</td>
                      <td>$4000</td>
                    </tr>
                    <tr class="warning">
                      <td>Jan 1 2018 at 05:00pm</td>
                      <td>$1000</td>
                      <td>$4000</td>
                    </tr>
                    <tr class="active">
                      <td>Jan 1 2018 at 05:00pm</td>
                      <td>$1000</td>
                      <td>$4000</td>
                    </tr>
                    <tr class="warning">
                      <td>Jan 1 2018 at 05:00pm</td>
                      <td>$1000</td>
                      <td>$4000</td>
                    </tr>
                    <tr class="active">
                      <td>Jan 1 2018 at 05:00pm</td>
                      <td>$1000</td>
                      <td>$4000</td>
                    </tr>
                    <tr class="warning">
                      <td>Jan 1 2018 at 05:00pm</td>
                      <td>$1000</td>
                      <td>$4000</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>  

          </div><!--/span-->

        </div><!--/row-->

        <hr>

      </div><!--/.fluid-container-->
  </div>

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
    <!-- Le javascript ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".submenu").hide();
        $(".setting-btn").click(function(){
          $(".submenu").slideToggle("slow")});
      });
    </script>
  </body>
</html>
