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
      @include('partials.home_menu_bar')
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
            @include('partials.home_side_bar')

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
