<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- BOOTSTRAP CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- FONT AWESOME CSS -->
<!--<link rel="stylesheet" href="css/all.min.css">-->

<!-- GOOGLE FOUNT -->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">


<!-- Custom Css -->
<link rel="stylesheet" href="css/style.css">


<title>school </title>
</head>

<body>

<!-- Start Navigation -->
<?php
include('./navbar.php');
?>
<!-- End Navigation -->

<!-- Start video background -->
<div class="container-fluid remove-vid-marg">
  <div class="vid-parent">
      <video playsinline autoplay muted loop>
          <source src="video/buch.mp4" >
      </video>
      <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
     <h1 class="my-content">Welcome to our School</h1>
     <small class="my-content">Learn and Implement</small><br>

     <a href="studentReg.php" class="btn btn-danger" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>

    </div> 
</div>    
<!-- End video background -->

<!-- Start banner -->
<div class="container-fluid bg-danger txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5><i class="fas fa-book-open mr-3"></i> 100+ Onlain Courses</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-user mr-3"></i> Expert Instructors</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee*</h5>
    </div>
  </div>
</div>
<!-- End banner -->

<!--CARD-->

<!-- Start Social buttom-->
<br>
<div class="container-fluid bg-danger">
  <div class="row text-white text-center p-1">
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
    </div>
  </div>
</div>
<!--End Social Button-->

<!-- Start About-->

<div class="container-fluid p-4" style="background-color: #fff">
<div class="container" style="background-color: #fff">
  <div class="row text-center">
    <div class="col-sm">
      <h5>About Us</h5>
      <p> Our school privides universal acces to the world best education.</p>
    </div>
    <div class="col-sm">
      <h5>Category</h5>
      <a class="text-dark" href="#">Web Devlopment</a><br />
      <a class="text-dark" href="#">Web Design</a><br />
      <a class="text-dark" href="#">Andriod App</a><br />
      <a class="text-dark" href="#">Ios Dev</a><br />
      <a class="text-dark" href="#">Data anylis</a><br />
      <a class="text-dark" href="#">Web Devlopment</a><br />
    </div>
  </div>
</div>  
</div>
<!-- End About-->

<!-- MASSAGE BOX  -->

<!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6">
        <h2 class="w3-wide w3-center" style="text-align: center;">CONTACT</h2>
    <p class="w3-opacity w3-center" style="text-align: center;"><i>Fan?
      Drop a note!</i></p>
        <form action=" " target=" ">
          <div class="row">
            <div class="col-4">
              <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fas fa-map-marker-alt" style="width:30px ; text-align: center;"></i> Chicago, US<br>
        <i class="fab fa-twitter" style="width:30px; text-align: center;"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope" style="width:30px; text-align: center;"> </i> Email: mail@mail.com<br>
      </div>

            </div>
            <div class="col-4">
              <div class="form-group">
                <input type="text" name="info-name" placeholder="Your's Name" class="form-control" required="Email">
              </div>
              <div class="form-group">
                <input name="info-email"  type="text" placeholder="Email" required="Email" class="form-control">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Message" required="Message" name="info-msg">
              </div>
              <button style="" class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<!-- END MASSAGE BOX -->

<!--Start footer-->
<?php
include('./footer.php');
?>
<!--End footer-->



<!-- JQUERY AND BOOTSRAP JAVASCRIPT -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- FONT AWESOME JAVASCRIPT -->
<script src="js/all.min.js"></script>
<script type="text/javascript" src="js/ajaxrequest.js"></script>
</body>


</html>