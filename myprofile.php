<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
//error_reporting(0);
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else{


if(isset($_POST['submit']))
  {
   
    $eid=$_SESSION['uid'];
    $FName=$_POST['FirstName'];
    $LName=$_POST['LastName'];
    $EmpPosition=$_POST['EmpPosition'];
    $EmpRoomNumber=$_POST['EmpRoomNumber'];
    $EmpContactNo=$_POST['EmpContactNo'];

    $query=mysqli_query($con, "update employeedetail set EmpFname='$FName',  EmpLName='$LName', EmpPosition='$EmpPosition', EmpRoomNumber='$EmpRoomNumber', EmpContactNo='$EmpContactNo'where Id='$eid'");
    
    if ($query) {
    $msg="Your profile has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again.";
    }
  }
  ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title>Profile</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
  <?php include_once('includes/sidebar.php')?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
         <?php include_once('includes/header.php')?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <center><h1 class="h3 mb-4 text-gray-800">MY PROFILE</h1></center><br>

<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

<form class="user" method="post" action="">
  <?php
$eid=$_SESSION['uid'];
$ret=mysqli_query($con,"select * from employeedetail where Id='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
               <div class="row">
                <div class="col-4 mb-3">First Name</div>
                   <div class="col-8 mb-3">   <input type="text" class="form-control form-control-user" id="FirstName" name="FirstName" aria-describedby="emailHelp" required="true" value="<?php  echo $row['EmpFname'];?>"></div>
                    </div>  
                    
                    <div class="row">
                      <div class="col-4 mb-3">Last Name </div>
                     <div class="col-8 mb-3">  <input type="text" class="form-control form-control-user" id="LastName" name="LastName" aria-describedby="emailHelp" required="true" value="<?php  echo $row['EmpLName'];?>"></div>  
                     </div>

                    <div class="row">
                    <div class="col-4 mb-3">Employee Position </div>
                    <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="EmpPosition" name="EmpPosition" aria-describedby="emailHelp" required="true" value="<?php  echo $row['EmpPosition'];?>"></div>
                    </div>

                    <div class="row">
                      <div class="col-4 mb-3">Employee Room Number</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="EmpRoomNumber" name="EmpRoomNumber" aria-describedby="emailHelp" required="true" value="<?php  echo $row['EmpRoomNumber'];?>">
                    </div></div>
       
                    <div class="row">
                      <div class="col-4 mb-3">Employee Contact No.</div>
                    <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="EmpContactNo" name="EmpContactNo" aria-describedby="emailHelp" required="true" value="<?php  echo $row['EmpContactNo'];?>">
                    </div></div>
                    
                    <div class="row">
                    <div class="col-4 mb-3">Email</div>
                   <div class="col-8 mb-3">
                      <input type="email" class="form-control form-control-user" id="Email" name="Email" aria-describedby="emailHelp" placeholder="Enter Email Address..." required="true" value="<?php  echo $row['EmpEmail'];?>" readonly="true">
                    </div></div>
                
<?php } ?>
                    <div class="row" style="margin-top:4%">
                      <div class="col-4"></div>
                      <div class="col-4">
                      <input type="submit" name="submit"  value="Update" class="btn btn-primary btn-user btn-block">
                    </div>
                    </div>
                  
                  </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php }  ?>
