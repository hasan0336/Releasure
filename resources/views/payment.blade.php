<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Payment | Releasur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">

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
                <li class="active">
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

              <div class="col-sm-12 col-md-12 col-lg-12 padding0">

                <div class="col-sm-3 col-md-3 col-lg-3">
                  <div class="card">
                    <div class="payment-add">
                      <button type="button" class="btn add-payment-btn" data-toggle="modal" data-target="#addcartModal">Add Card</button>
                    </div>
                  </div>
                </div>
                
                <div class="col-sm-3 col-md-3 col-lg-3">
                  <div class="card">
                    <div class="card__front card__part">
                      <img class="card__front-square card__square" src="https://image.ibb.co/cZeFjx/little_square.png">
                      <img class="card__front-logo card__logo" src="https://www.fireeye.com/partners/strategic-technology-partners/visa-fireeye-cyber-watch-program/_jcr_content/content-par/grid_20_80_full/grid-20-left/image.img.png/1505254557388.png">
                      <p class="card_numer">**** **** **** 6258</p>
                      <div class="card__space-75">
                        <span class="card__label">Card holder</span>
                        <p class="card__info">John Doe</p>
                      </div>
                      <div class="card__space-25">
                        <span class="card__label">Expires</span>
                        <p class="card__info">10/25</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3">
                  <div class="card">
                    <div class="card__front card__part">
                      <img class="card__front-square card__square" src="https://image.ibb.co/cZeFjx/little_square.png">
                      <img class="card__front-logo card__logo" src="https://www.fireeye.com/partners/strategic-technology-partners/visa-fireeye-cyber-watch-program/_jcr_content/content-par/grid_20_80_full/grid-20-left/image.img.png/1505254557388.png">
                      <p class="card_numer">**** **** **** 6258</p>
                      <div class="card__space-75">
                        <span class="card__label">Card holder</span>
                        <p class="card__info">John Doe</p>
                      </div>
                      <div class="card__space-25">
                        <span class="card__label">Expires</span>
                          <p class="card__info">10/25</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3">
                  <div class="card">
                    <div class="card__front card__part">
                      <img class="card__front-square card__square" src="https://image.ibb.co/cZeFjx/little_square.png">
                      <img class="card__front-logo card__logo" src="https://www.fireeye.com/partners/strategic-technology-partners/visa-fireeye-cyber-watch-program/_jcr_content/content-par/grid_20_80_full/grid-20-left/image.img.png/1505254557388.png">
                      <p class="card_numer">**** **** **** 6258</p>
                      <div class="card__space-75">
                        <span class="card__label">Card holder</span>
                        <p class="card__info">John Doe</p>
                      </div>
                      <div class="card__space-25">
                        <span class="card__label">Expires</span>
                          <p class="card__info">10/25</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3">
                  <div class="card">
                    <div class="card__front card__part">
                      <img class="card__front-square card__square" src="https://image.ibb.co/cZeFjx/little_square.png">
                      <img class="card__front-logo card__logo" src="https://www.fireeye.com/partners/strategic-technology-partners/visa-fireeye-cyber-watch-program/_jcr_content/content-par/grid_20_80_full/grid-20-left/image.img.png/1505254557388.png">
                      <p class="card_numer">**** **** **** 6258</p>
                      <div class="card__space-75">
                        <span class="card__label">Card holder</span>
                        <p class="card__info">John Doe</p>
                      </div>
                      <div class="card__space-25">
                        <span class="card__label">Expires</span>
                          <p class="card__info">10/25</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3">
                  <div class="card">
                    <div class="card__front card__part">
                      <img class="card__front-square card__square" src="https://image.ibb.co/cZeFjx/little_square.png">
                      <img class="card__front-logo card__logo" src="https://www.fireeye.com/partners/strategic-technology-partners/visa-fireeye-cyber-watch-program/_jcr_content/content-par/grid_20_80_full/grid-20-left/image.img.png/1505254557388.png">
                      <p class="card_numer">**** **** **** 6258</p>
                      <div class="card__space-75">
                        <span class="card__label">Card holder</span>
                        <p class="card__info">John Doe</p>
                      </div>
                      <div class="card__space-25">
                        <span class="card__label">Expires</span>
                          <p class="card__info">10/25</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3">
                  <div class="card">
                    <div class="card__front card__part">
                      <img class="card__front-square card__square" src="https://image.ibb.co/cZeFjx/little_square.png">
                      <img class="card__front-logo card__logo" src="https://www.fireeye.com/partners/strategic-technology-partners/visa-fireeye-cyber-watch-program/_jcr_content/content-par/grid_20_80_full/grid-20-left/image.img.png/1505254557388.png">
                      <p class="card_numer">**** **** **** 6258</p>
                      <div class="card__space-75">
                        <span class="card__label">Card holder</span>
                        <p class="card__info">John Doe</p>
                      </div>
                      <div class="card__space-25">
                        <span class="card__label">Expires</span>
                          <p class="card__info">10/25</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3">
                  <div class="card">
                    <div class="card__front card__part">
                      <img class="card__front-square card__square" src="https://image.ibb.co/cZeFjx/little_square.png">
                      <img class="card__front-logo card__logo" src="https://www.fireeye.com/partners/strategic-technology-partners/visa-fireeye-cyber-watch-program/_jcr_content/content-par/grid_20_80_full/grid-20-left/image.img.png/1505254557388.png">
                      <p class="card_numer">**** **** **** 6258</p>
                      <div class="card__space-75">
                        <span class="card__label">Card holder</span>
                        <p class="card__info">John Doe</p>
                      </div>
                      <div class="card__space-25">
                        <span class="card__label">Expires</span>
                          <p class="card__info">10/25</p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>  

          </div><!--/span-->

        </div><!--/row-->

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

  <!-- Add Card Modal -->
  <div class="modal fade" id="addcartModal" role="dialog">
     <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h3 class="modal-title">Please provide the following details</h3>
           </div>
           <div class="modal-body">
              <form action="#" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control" id="contact" placeholder="Contact Number">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="delivery" placeholder="Delivery Address">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="description" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <select class="form-control" id="credit">
                      <option selected>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                 </div>
                  <div class="form-group">
                    <input type="submit" class="form-control btn btn-success add-payment-btn" id="usr">
                 </div>
              </form>
           </div>
        </div>
     </div>
  </div>
  </body>
</html>