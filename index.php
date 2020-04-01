<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Paycheck$</title>

  <!-- Bootstrap -->
  <!-- FONT AWESOME SCRIPT -->
  <script src="https://kit.fontawesome.com/bff77f2e89.js" crossorigin="anonymous"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/set1.css" />
  <link href="css/overwrite.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
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
        <a class="navbar-brand" href="index.html"><span>Paycheck$</span></a>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="slider">
        <div class="img-responsive">
          <ul class="bxslider">
            <li><img src="https://cdn.ramseysolutions.net/media/article-images/how-to-stop-living-paycheck-to-paycheck.jpg" alt="Paycheck Calendar" /></li>
            <li><img src="https://cdn.gobankingrates.com/wp-content/uploads/2017/05/0_MAIN_170531_GBR_PaycheckDeduction_1920x1080.jpg" alt="Paycheck Image" /></li>
            <li><img src="https://www.payactiv.com/wp-content/uploads/2019/02/escaping-debt.jpg" alt="Financials Image" /></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="text-center">
          <h2>Calculate Your Pay!</h2>
          <p>Useful for determining what your next check amount will be. Thinking of switching jobs?
            You can also use this calculator to see how much you bring home after that raise.
          </p>
        </div>
        <hr>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="box">
        <div class="col-md-4 col-md-offset-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
            <h4>Designed with Phone in Mind</h4>
            <div class="icon">
              <i class="fas fa-mobile-alt fa-5x"></i>
            </div>
            <p>Can be accessed on desktop or mobile. <br />
               Bookmark or save to your mobile homescreen for easy access!</p>
          </div>
        </div>
      </div>
    </div>
      <form action="php/printcheck.php" method="post" id='form'>
          <div class="form-group row">
            <div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
              <label for="employeeName">Name</label>
              <input type="text" name="name" class="form-control" id="employeeName" placeholder="James Howlett" autocomplete="off" required>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
              <label for="payType">Pay Type</label>
              <select class="form-control" id="payType" required>
                <option value="" disabled selected>Select Pay Type</option>
                <option value="Hourly">Hourly</option>
                <option value="Salary">Salary</option>
              </select>
            </div>   
          </div>
          <div class="form-group row">
            <div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
              <label for="payRate">Pay Rate</label>
              <input type="number" step=".01" name="payRate" class="form-control" id="payRate" aria-describedby="payHelp" placeholder="Ex. 16.50 or 34,320">
              <small id="payHelp" class="form-text text-muted">Enter hourly pay rate or annual salary.</small>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
              <label for="hours">Hours Worked</label>
              <input type="number" step=".01" name="hours" class="form-control" id="hours" aria-describeby="hourHelp" placeholder="Ex. 40">
              <small id="hoursHelp" class="form-text text-muted">Enter hours worked for one week.</small>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
              <label for="paySchedule">Pay Period</label>
              <div class="form-check form-check-inline row justify-content-between text-center">
                <div class="col-xs-4 radio-left">
                  <input class="form-check-input" type="radio" name="paySchedule" id="weekly" value="weekly" required>
                  <label class="form-check-label" for="weekly">Weekly</label>
                </div>
                <div class="col-xs-4">
                  <input class="form-check-input" type="radio" name="paySchedule" id="biWeekly" value="biWeekly">
                  <label class="form-check-label" for="biWeekly">Bi-Weekly</label>
                </div>
              </div>   
            </div>
          </div>
          <div class="ficon text-center">
            <input type="submit" value="Calculate" href="#" class="btn btn-default" role="button" id="calculate">
          </div>
      </form>
  </div>
  
  <!-- php Require footer -->
  <? require_once 'php/footer.php'; ?>
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
  <script src="js/custom.js"></script>

</body>

</html>
