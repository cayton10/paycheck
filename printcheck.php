<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Paycheck$</title>

  <!-- Bootstrap -->

<!-- --------------------------- FONT AWESOME SCRIPT -------------------------- -->
  <script src="https://kit.fontawesome.com/bff77f2e89.js" crossorigin="anonymous"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/set1.css" />
  <link href="css/overwrite.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: eNno
    Theme URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
        <a class="navbar-brand" href="index.html"><span>Paycheck$</span></a>
      </div>
      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="index.html">Home</a></li>
            <li role="presentation" class="active"><a href="services.html">Services</a></li>
            <li role="presentation"><a href="blog.html">Blog</a></li>
            <li role="presentation"><a href="portfolio.html">Portfolio</a></li>
            <li role="presentation"><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- PHP SCRIPT FOLLOWS -->

  <?php
  /* ----------------------- declare required variables ----------------------- */
  //Globals for federal tax rates
  $ft10 = 0.10;
  $ft12 = 0.12;
  $ft22 = 0.22;
  $ft24 = 0.24;
  //Globals for state taxes
  $st3 = 0.03;
  $st4 = 0.04;
  $st5 = 0.05;
  //Social security
  $socSec = 0.062;
  //Medicare
  $medi = 0.0145;

  //create short var names from index from $_POST inputs
  $name = htmlspecialchars($_POST['name']);
  $payRate = htmlspecialchars($_POST['payRate']);
  $hours = htmlspecialchars($_POST['hours']);

  //Gross pay calculation for bi-weekly pay period
  $gross = ($payRate * $hours) * 2;
  
  //Declare
  $federalTax = 0.00;
  $stateTax = 0.00;
  $socialSecurity = $gross * 0.062;
  $medicare = $gross * 0.0145;

/* -------------------------------------------------------------------------- */
/*                            CALCULATE FEDERAL TAX                           */
/* -------------------------------------------------------------------------- */

  if ($gross <= 9525) {
    $federalTax = $gross * $ft10;
  } else if ($gross > 9525 && $gross <= 38700) {
    $federalTax = $gross * $ft12;
  } else if ($gross > 38700 && $gross <= 82500) {
    $federalTax = $gross * $ft22;
  } else {
    $federalTax = $gross * $ft24;
  }

/* -------------------------------------------------------------------------- */
/*                             CALCULATE STATE TAX                            */
/* -------------------------------------------------------------------------- */

  if($gross < 10000){
    $stateTax = $gross * $st3;
  } else if($gross >= 10000 && $gross < 25000) {
    $stateTax = $gross * $st4;
  } else {
    $stateTax = $gross * $st5;
  }

/* -------------------------------------------------------------------------- */
/*                                   NET PAY                                  */
/* -------------------------------------------------------------------------- */
  $totalDeduction = $federalTax + $stateTax + $medicare + $socialSecurity;
  $netPay = $gross - $totalDeduction;
  ?>




  <div class="container">
    <div class="row">
      <div class="service">
        <div class="col-md-6 col-md-offset-3">
          <div class="text-center">
            <h2>Estimated Pay</h2>
            <p>Your net pay is calculated on a bi-weekly pay period basis. <br />
            </p>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>
  
  <div class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
            <!-- ECHO NAME -->
          <? echo "<h3>".$name."'s Estimated Pay:</h4>"?>
            <div class="icon">
            <i class="fas fa-money-bill-wave fa-5x"></i>
            </div>
          <? echo "<h4>Gross Pay: $".number_format($gross, 2, ".", ",")."</h4>";?>
          <? echo "<h4 style='color:darkred'>Total Deductions: $".number_format($totalDeduction, 2, ".", ",")."</h4>";?>
          <? echo "<h4 style='color:darkgreen; font-weight:bold'>Net Pay: $".number_format($netPay, 2, ".", ",")."</h4>";?>
            <div class="ficon">
              <a href="#" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
            <h4>Itemized Deduction</h4>
            <div class="icon">
              <i class="fas fa-file-invoice-dollar fa-5x"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras</p>
            <div class="ficon">
              <a href="#" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>
        </div>

  <footer>
    <div class="inner-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 f-about">
            <a href="index.html"><h1><span>e</span>Nno</h1></a>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam consectetur adipiscing elit Cras suscipit arcu libero
            </p>
          </div>
          <div class="col-md-4 l-posts">
            <h3 class="widgetheading">Latest Posts</h3>
            <ul>
              <li><a href="#">This is awesome post title</a></li>
              <li><a href="#">Awesome features are awesome</a></li>
              <li><a href="#">Create your own awesome website</a></li>
              <li><a href="#">Wow, this is fourth post title</a></li>
            </ul>
          </div>
          <div class="col-md-4 f-contact">
            <h3 class="widgetheading">Stay in touch</h3>
            <a href="#">
              <p><i class="fa fa-envelope"></i> example@gmail.com</p>
            </a>
            <p><i class="fa fa-phone"></i> +345 578 59 45 416</p>
            <p><i class="fa fa-home"></i> Enno inc | PO Box 23456 Little Lonsdale St, New York <br> Victoria 8011 USA</p>
          </div>
        </div>
      </div>
    </div>

    <div class="last-div">
      <div class="container">
        <div class="row">
          <div class="copyright">
            &copy; eNno Theme. All Rights Reserved
            <div class="credits">
              <!--
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eNno
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <ul class="social-network">
            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
          </ul>
        </div>
      </div>
      <a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="js/fliplightbox.min.js"></script>
  <script src="js/functions.js"></script>
  <script type="text/javascript">
    $('.portfolio').flipLightBox()
  </script>

</body>

</html>
