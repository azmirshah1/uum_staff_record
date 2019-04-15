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
    $Certificated1=$_POST['Certificated1'];
    $Position1=$_POST['Position1'];
    $Company1=$_POST['Company1'];
    $PerformanceDescription1=$_POST['PerformanceDescription1'];
    
    $query=mysqli_query($con, "insert into empexperience ( Certificated1, Position1, Company1, PerformanceDescription1) value ('$Certificated1', '$Position1', '$Company1', 
      '$PerformanceDescription1')");
    
    if ($query) {
    $msg="Your data has been submitted succeesfully.";
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

  <title>Employee Certificated Experience</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
          <center><h1 class="h3 mb-4 text-gray-800">My Certificated Experience</h1></center><br>

<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

<?php 
$empid=$_SESSION['uid'];
$query=mysqli_query($con,"select * from empexperience where EmpId=$empid");
$row=mysqli_fetch_array($query);
if($row>0)
{

?>
<p style="font-size:16px; color:red" align="center">Your details already added. Now you can edit the record. </p>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<tr>
  <th>Certificated Name</th>
  <td><?php echo $row['Certificated1'];?></td>
</tr>
<tr>
  <th>Position</th>
  <td><?php echo $row['Position1'];?></td>
</tr>
<tr>
  <th>Company Name</th>
  <td><?php echo $row['Company1'];?></td>
</tr>
<tr>
  <th>Performance Description</th>
  <td><?php echo $row['PerformanceDescription1'];?></td>
</tr>
<tr>

</table>

<?php } else {?>

<form class="user" method="post" action="">
 
               <div class="row">
                <div class="col-4 mb-3">Certificated Name</div>
                   <div class="col-8 mb-3">   <input type="text" class="form-control form-control-user" id="Certificated1" name="Certificated1" aria-describedby="emailHelp" value=""></div>
                    </div> 

                    <div class="row">
                    <div class="col-4 mb-3">Position</div>
                    <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="Position1" name="Position1" aria-describedby="emailHelp" value=""></div>
                    </div>

                    <div class="row">
                      <div class="col-4 mb-3">Company Name</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="Company1" name="Company1" aria-describedby="emailHelp" value="">
                    </div></div>

                    <div class="row">
                <div class="col-4 mb-3">Performance Description</div>
                   <div class="col-8 mb-3">   <input type="text" class="form-control form-control-user" id="PerformanceDescription1" name="PerformanceDescription1" aria-describedby="emailHelp" value="" required="true"></div>
                    </div>  
                   
                    <div class="row" style="margin-top:4%">
                      <div class="col-4"></div>
                      <div class="col-4">
                      <input type="submit" name="submit"  value="Submit" class="btn btn-primary btn-user btn-block">
                    </div>
                    </div>
                  
                  </form>
<?php } ?>

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
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php }  ?>
