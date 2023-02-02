<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Micronet Broadband Enterprises</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- CSS Custom -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- favicon Icon -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- CSS Plugins -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.min.css">
  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

  <?php include('header.php') ?>

  <section id="home" class="top_banner_bg secondary-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="top_banner">

          </div>

          <div class="col-md-12">
            <div class="present">
              <h1 align="left" style="font-size:65px;"><b>Micronet Broadband </b></h1>
            </div>

          </div>


        </div>
      </div>
    </div>
  </section>

  <section id="services" class=" our_service_bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section_heading section_heading_2">
            <h2> Our Services</h2>
            <h4></h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="images/Wood-Furniture-Repair.jpg" alt="...">
            <div class="caption">
              <h3>Furniture Repair</h3>
              <p>Looking for carpenter services online is easier than asking around for a local technician. What’s better is that with vblue, you get background-verified carpenters who make sure you’re satisfied with the work provided. </p>
              <p><a href="book.php" class="btn btn-primary" role="button" style="width: 100%;">BOOK NOW </a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="images/Wood-Furniture-Repair.jpg" alt="...">
            <div class="caption">
              <h3>Furniture Repair</h3>
              <p>Looking for carpenter services online is easier than asking around for a local technician. What’s better is that with vblue, you get background-verified carpenters who make sure you’re satisfied with the work provided. </p>
              <p><a href="book.php" class="btn btn-primary" role="button" style="width: 100%;">BOOK NOW </a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="images/Wood-Furniture-Repair.jpg" alt="...">
            <div class="caption">
              <h3>Furniture Repair</h3>
              <p>Looking for carpenter services online is easier than asking around for a local technician. What’s better is that with vblue, you get background-verified carpenters who make sure you’re satisfied with the work provided. </p>
              <p><a href="book.php" class="btn btn-primary" role="button" style="width: 100%;">BOOK NOW </a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="images/Wood-Furniture-Repair.jpg" alt="...">
            <div class="caption">
              <h3>Furniture Repair</h3>
              <p>Looking for carpenter services online is easier than asking around for a local technician. What’s better is that with vblue, you get background-verified carpenters who make sure you’re satisfied with the work provided. </p>
              <p><a href="book.php" class="btn btn-primary" role="button" style="width: 100%;">BOOK NOW </a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="images/Wood-Furniture-Repair.jpg" alt="...">
            <div class="caption">
              <h3>Furniture Repair</h3>
              <p>Looking for carpenter services online is easier than asking around for a local technician. What’s better is that with vblue, you get background-verified carpenters who make sure you’re satisfied with the work provided. </p>
              <p><a href="book.php" class="btn btn-primary" role="button" style="width: 100%;">BOOK NOW </a></p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>

  <script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }

    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }

    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }

    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }
  </script>

  <br>

  <footer class="third-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="footer_top">
            <h4>Connect With Us</h4>

            <ul>
              <li> <a href="http://facebook.com/"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
              <li> <a href="http://twitter.com/"> <i class="fa fa-twitter" aria-hidden="true"></i> </a> </li>
              <li> <a href="http://linkedin.com/"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
              <li> <a href="http://google.com/"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a> </li>
              <li> <a href="http://youtu.be/"> <i class="fa fa-youtube-square" aria-hidden="true"></i> </a> </li>
              <li> <a href="https://www.instagram.com"> <i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
            </ul>
          </div>




        </div>
      </div>
    </div>

    <div class="footer_bottom fourth-bg">
      <!-- Keep Footer Credit Links Intact -->
      <p> 2018 &copy; All rights Reserved <a href="index.php">Micronet Broadband Enterprises </a> Designed & Developed By <a href="www.gltechnocraft.com">GLT Pvt, Ltd.</a> </p>
      <a href="#" class="backtop"> ^ </a>
    </div>

  </footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/interface.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#menu_slide").click(function() {
        $("#navbar").slideToggle('normal');
      });
    });
  </script>
  <!--Menu Js Right Menu-->
  <script type="text/javascript">
    $(document).ready(function() {
      $('#navbar > ul > li:has(ul)').addClass("has-sub");
      $('#navbar > ul > li > a').click(function() {
        var checkElement = $(this).next();
        $('#navbar li').removeClass('dropdown');
        $(this).closest('li').addClass('dropdown');
        if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
          $(this).closest('li').removeClass('dropdown');
          checkElement.slideUp('normal');
        }
        if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
          $('#navbar ul ul:visible').slideUp('normal');
          checkElement.slideDown('normal');
        }
        if (checkElement.is('ul')) {
          return false;
        } else {
          return true;
        }
      });
    }); 
  </script>
  <script type="text/javascript">
    $("#navbar").on("click", function(event) {
      event.stopPropagation();
    });
    $(".dropdown-menu").on("click", function(event) {
      event.stopPropagation();
    });
    $(document).on("click", function(event) {
      $(".dropdown-menu").slideUp('normal');
    });

    $(".navbar-header").on("click", function(event) {
      event.stopPropagation();
    });
    $(document).on("click", function(event) {
      $("#navbar").slideUp('normal');
    });
  </script>

</body>
<!-- JS Plugins -->

</html>