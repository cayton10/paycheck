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
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/font-awesome.css">
  <link rel="stylesheet" href="../css/jquery.bxslider.css">
  <link rel="stylesheet" href="../css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="../css/demo.css" />
  <link rel="stylesheet" type="text/css" href="../css/set1.css" />
  <link href="../css/overwrite.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/custom.css" rel="stylesheet">
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
        <a class="navbar-brand" href="../index.php"><span>Paycheck$</span></a>
      </div>
      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="../index.php">New Check</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- PHP SCRIPT FOLLOWS -->

  <?php
  /* ----------------------- declare required variables ----------------------- */

  /* ---------------------------- FED TAX CONSTANTS --------------------------- */  
  define('FEDTAX10', 0.10);
  define('FEDTAX12', 0.12);
  define('FEDTAX22', 0.22);
  define('FEDTAX24', 0.24);
  /* --------------------------- STATE TAX CONSTANTS -------------------------- */
  define('STATETAX3', 0.03);
  define('STATETAX4', 0.04);
  define('STATETAX5', 0.05);
  /* ------------------------- SOCIAL SEC TAX CONSTANT ------------------------ */
  define('SOCIAL', 0.062);
  /* -------------------------- MEDICARE TAX CONSTANT ------------------------- */
  define('MEDICARE', 0.0145);
  /* ------------------------ END CONSTANT DECLARATIONS ----------------------- */

  //Declare Overtime Variables
  $overHours = 0.00;
  $overRate = 0.00;
  //create short var names from index from $_POST inputs
  $name = htmlspecialchars($_POST['name']);
  $payRate = htmlspecialchars($_POST['payRate']);
  $hours = htmlspecialchars($_POST['hours']);
  //Get first and last names for output if both are given
  $names = explode(" ", $name);
  //Assign first and last name variables to exploded array values
  $fName = $names[0];
  $lName = $names[1];

  //If overtime is reached, set appropriate variables and crunch numbers
  if($hours > 40){
    $overHours = $hours - 40;
    $overRate = $payRate * 1.5;
    $overTime = ($overHours * $overRate) * 2; //<-- X 2 for bi-weekly pay;
    //Run appropriate time and a half if overtime
    $gross = (($payRate  * 40) * 2 + $overTime);
  } else { //Else run appropriate gross pay calc
    $gross = ($payRate * $hours) * 2;
  }

  //Declare
  $federalTax = 0.00;
  $stateTax = 0.00;
  $socialSecurity = $gross * 0.062;
  $medicare = $gross * 0.0145;
  $annualGross = $gross * 26;
  //Bi-weekly pay period = 26 pay periods in one year.

/* -------------------------------------------------------------------------- */
/*                            CALCULATE FEDERAL TAX                           */
/* -------------------------------------------------------------------------- */

  if ($annualGross <= 9525) {
    $federalTax = $gross * FEDTAX10;
  } else if ($annualGross > 9525 && $annualGross <= 38700) {
    $federalTax = $gross * FEDTAX12;
  } else if ($annualGross > 38700 && $annualGross <= 82500) {
    $federalTax = $gross * FEDTAX22;
  } else {
    $federalTax = $gross * FEDTAX24;
  }

/* -------------------------------------------------------------------------- */
/*                             CALCULATE STATE TAX                            */
/* -------------------------------------------------------------------------- */

  if($annualGross < 10000){
    $stateTax = $gross * STATETAX3;
  } else if($annualGross >= 10000 && $annualGross < 25000) {
    $stateTax = $gross * STATETAX4;
  } else {
    $stateTax = $gross * STATETAX5;
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
            <p>Your net pay is calculated on a bi-weekly pay period basis. <br /></p>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>
  
  <div class="services">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 pay">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
            <!-- ECHO NAME -->
          <? echo "<h3>$fName's Estimated Pay:</h4>"?>
            <div class="icon">
            <i class="fas fa-money-bill-wave fa-5x"></i>
            </div>
              <? echo "<h4>Gross Pay: $".number_format($gross, 2, ".", ",")."</h4>";?>
              <? echo "<h4 style='color:darkred'>Total Deductions: $".number_format($totalDeduction, 2, ".", ",")."</h4>";?>
              <? echo "<h4 class='netPay'>Net Pay: $".number_format($netPay, 2, ".", ",")."</h4>";?>
          </div>
        </div>

        <div class="col-12 col-md-6 deduct">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
            <h3>Itemized Deduction:</h3>
            <div class="icon">
              <i class="fas fa-file-invoice-dollar fa-5x"></i>
            </div>
            <!-- ECHO ALL DEDUCTIONS -->     
                <? echo "<h4>Federal Tax: $".number_format($federalTax, 2, ".", ",")."</h4>";?>
                <? echo "<h4>State Tax: $".number_format($stateTax, 2, ".", ",")."</h4>";?>              
                <? echo "<h4>Social Security: $".number_format($socialSecurity, 2, ".", ",")."</h4>";?>
                <? echo "<h4>Medicare: $".number_format($medicare, 2, ".", ",")."</h4>";?>          
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- PHP REQUIRE ONCE FOOTER -->
  <? require_once 'footer.php';?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/wow.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.isotope.min.js"></script>
  <script src="../js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="../js/fliplightbox.min.js"></script>
  <script src="../js/functions.js"></script>
  <script type="text/javascript">
    $('.portfolio').flipLightBox()
  </script>

</body>

</html>
