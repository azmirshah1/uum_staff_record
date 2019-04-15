<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
//error_reporting(0);
if (strlen($_SESSION['uid']==0)) 
{
  header('location:logout.php');
} 

  else {
  extract($_POST);

  ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title>Working Experience</title>

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
          <center><h1 class="h3 mb-4 text-gray-800">MY WORKING EXPERIENCE</h1></center><br>

          <table class="table table-bordered" >

                <tr class="danger" align="center">
                    <th>Company Name</th>
                    <th>Position</th>
                    <th>Date Started</th>
                    <th>Date Ended</th>
                    <th>Coordinator Name</th>
                    <th>Coordinator Contact Number</th>
                    <th>Description</th>
                    </tr>



<form class="user" method="post" action="">
<?php
$eid=$_SESSION['uid'];
$ret=mysqli_query($con,"select * from empexperience where Id='$eid'");
$sno=1;
while ($row=mysqli_fetch_array($ret)) {

   echo "<tr class='success'><td>$sno</td><td>$row[1]</td><td>$row[2]</td><td><a class='btn icon-btn btn-success' href=doctor_update.php?rno=".$row[0]."><span class='glyphicon btn-glyphicon glyphicon-edit img-circle text-success'></span> Edit</a></td><td><a class='btn icon-btn btn-danger' href=delete_doctors.php?rno=".$row[0]."><span class='glyphicon btn-glyphicon glyphicon-trash img-circle text-danger'></span> Delete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td colspan='7' align='center'><font size=4 color=red>Records
Not Found</font></td></tr>";

?>

      
        </table>

             
          <?php } ?>

                  
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
<?php  ?>
