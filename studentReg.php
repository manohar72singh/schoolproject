<!--<?php
include 'connection.php';
if(isset($_POST['submit']))
{
  $slname=$_POST['stuname'];
  $slemail=$_POST['stuemail'];
  $slpass=$_POST['stupass'];

  $check="insert into loginstudent (stu_name,stu_email,stu_pass) values('$slname','$slemail','$slpass')";
  $msg=mysqli_query($con,$check);
  if($msg)
        {
          ?>
          <span  style="font-size:30px; color:blue;">SIGNUP SUCCESSFULLY</span>
          <?php
        }
        else
        {
          ?>
          <span style="font-size:30px; color:red;">SIGNUP FAILED</span>
          <?php
        }
}
?>-->






<!DOCTYPE html>
<html>
<head>
  <title>RegistrionsSubmit</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- BOOTSTRAP CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- FONT AWESOME CSS -->
<link rel="stylesheet" href="css/all.min.css">

<!-- GOOGLE FOUNT 
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">-->


<!-- Custom Css -->
<link rel="stylesheet" href="css/style.css">

</head>
<body>


<div class="container">
  <div class="row">
    <div class="col-4"></div>
    <div class="col-4">

      <!-- RESULT HERE -->

<?php
include 'connection.php';
if(isset($_POST['semail']))
{
  $cemail=$_POST['semail'];
  $q="select stu_email from loginstudent where stu_email= '$cemail'";
  $result=mysqli_query($con,$q);
  $total=mysqli_num_rows($result);
  if($total==1)
  {
    ?>
    <span  style="font-size:30px; color:red;">THIS EMAIL ALREDY IN YOUR TABLE</span>
    <?php
  }
  else
{
if(isset($_POST['submit']))
{
  $sruser=$_POST['suname'];
  $srname=$_POST['sname'];
  $sremail=$_POST['semail'];
  $srpass=$_POST['spwd'];

  $check="insert into loginstudent (stu_name,stu_email,stu_uname,stu_pass) values('$srname','$sremail','$sruser','$srpass')";
  $msg=mysqli_query($con,$check);
  if($msg)
        {
          ?>
          <span  style="font-size:30px; color:blue;">SIGNUP SUCCESSFULLY</span>
          <?php
        }
        else
        {
          ?>
          <span style="font-size:30px; color:red;">SIGNUP FAILED</span>
          <?php
        }
}
}
}
?>

    </div>
  </div>
</div>

<div class="row">
  <div class="col-3"></div>
  <div class="col-6">
    <div class="card mx-primary mt-5">
      <div class="card-header text-center">
        <h3>Rigester</h3>
      </div>
      <form action="studentReg.php" method="post">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <div class="form-group">
                 <input type="text" name="suname" placeholder=" Username" class="form-control">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <input type="text" name="sname" placeholder="Name" class="form-control">                    
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
               <input type="email" name="semail" placeholder="Email Id " class="form-control">
              </div> 
            </div>
            <div class="col">
              <div class="form-group">
                <input type="password" name="spwd" class="form-control" placeholder="Password" required>
              </div>
            </div>
           
          </div>
        </div>
        <div class="row">
              <div class="col">
              <div class="form-group">
              <p class="text-center">Already have an account? <a href="studentlogin.php">Login here</a></p>
            </div>
            </div>
            </div>
             <div class="card-footer text-center">
            <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
  
                        <button type="reset" class="btn btn-danger">RESET</button>
                        <button type="reset" class="btn btn-link"><a href="index.php">HOME</a></button>
          </div>
      </form>
    </div>
  </div>
</div>






















<!-- JQUERY AND BOOTSRAP JAVASCRIPT -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- FONT AWESOME JAVASCRIPT -->
<script src="js/all.min.js"></script>
<script type="text/javascript" src="js/ajaxrequest.js"></script>
</body>
</html>




<!-- ========== End ============ END ================ END =============-->


<!-- Modal -->

<!--<div class="modal fade" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form  method="post" action="studentReg.php">
        <div class="form-group">
          <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label>
          <input type="text" name="stuname" class="form-control" placeholder="Name" id="stuname">
        </div>
  <div class="form-group">
    <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold">Email </label>
    <input type="email" class="form-control" id="stuemail" name="stuemail"  placeholder="Email">
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">Password</label>
    <input type="password" class="form-control" id="stupass" name="stupass" placeholder="Password">
  </div>
</form>
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Sign up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>-->

