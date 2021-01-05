<!DOCTYPE html>
<html>
<head>
	<title>Check Payment</title>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!-- BOOTSTRAP CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- FONT AWESOME CSS -->
<link rel="stylesheet" href="css/all.min.css">
<!-- GOOGLE FOUNT -->
     <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
     <!-- Custom Css --> 
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- Start Navigation -->
   <?php
   include('./navbar.php');
   ?>
   <!-- End Navigation -->
    
    <!--Start banner-->
    <div class="container-fluid bg-dark">
    	<div class="row">
    		<img src="imags/book.jpg" alt="courses" style="height: 300px; width:100%; object-fit:cover;
                box-shadow:10px;"/>
    	</div>
    </div>
    <!--End banner-->

<!--Start main content -->
<div class="container">
	<h2 class="text-center my-4">Payment status</h2>
	<form method="post" action="">
		<div class="form-group row">
		<label class="offset-sm-3 col-form-label">Order ID: </label>
		<div>
			<input type="text" class="form-control mx-3">
		</div>
		<div>
			<input type="submit" class="btn btn-primary mx-4" value="view">
		</div>
		</div>
	</form>
</div>
<!--End main content -->





    <!--Start footer-->
<?php
include('./footer.php');
?>
<!--End footer-->

<!--Start Registraion Model-->
<?php
include('./studentReg.php');
?>
<!--End Registraion Model-->


<!--Start Student login Model-->
<?php
include('./studentLogin.php');
?>
<!--End Student login Model-->

<!--Start admin login Model-->
<?php
include('./adminLogin.php');
?>
<!--End admin login Model-->


<!-- JQUERY AND BOOTSRAP JAVASCRIPT -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- FONT AWESOME JAVASCRIPT -->
<script src="js/all.min.js"></script>
</body>
</html>