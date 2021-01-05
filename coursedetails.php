<!DOCTYPE html>
<html>
<head>
	<title>Course Detail</title>
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

 <!--Start Main content-->
 <div class="container mt-5">
 	<div class="row">
 		<div class="col-md-4">
 			<img src="" class="card-image-top" alt="no">
 		</div>
 		<div class="col-md-8">
 			<div class="card-body">
 				<h5 class="card-title"> Course Name: Learn python</h5>
 				<p class="card-text"> Description:Loem ipsum dolor sit ament consectetur adipisicing elit nonstrun provided.</p>
 				<p class="card-text">Duration 1 Months</p>
 				<form action="" method="post">
 					<p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span></p>
 					<button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button>
 				</form>
 			</div>
 		</div>
 	</div>

    <div class="container">
    	<div class="row">
    		<table class="table table-bordered table-hover">
    			<thead>
    				<tr>
    					<th scope="col">Lesson No.</th>
    					<th scope="col">Lesson Name.</th>
    				</tr>
    			</thead>
    			<tbody>
    				<tr>
    					<th scope="row">1</th>
    					<td>Introduction</td>';
    				</tr>
    			</tbody>
    		</table>';
    	</div>
    </div>

 </div>
 <!--End main content-->













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
</body>
</html>