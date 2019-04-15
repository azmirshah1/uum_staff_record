<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
//error_reporting(0);
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else{

if(isset($save))
{
		$query="insert into doctor values('','$name','$spec','YES')";
		if(mysqli_query($con,$query))
		{
			echo "<script>
	alert('Data saved successfully')
	</script>";
		
		
		}
		else
		{
		echo "<script>
	alert('Data saved unsuccessfully')
	</script>";
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


<center>
<div style="background-color:white; width:500px; border-style:groove; border-color:#FF0099"; align="center">
				<div style="background-color:#3366FF; width:494px; padding-top:1px; padding-bottom:1px;">
				<h3 style="color:#CC3300;"><b>ADD WORKING EXPERIENCE</b></h3></div>
				 <hr>
<form method="post">
<table width="479" height="400" border="0" cellspacing="0" cellpadding="0">
 

 
  
  <tr>
    <th scope="row"> Company Name </th>
    <td><input type="text" name="name" required/></td>
  </tr>
  
  <tr>
    <th scope="row"> Position </th>
    <td><input type="text" name="spec" required/></td>
  </tr>

  <tr>
    <th scope="row"> Date Started </th>
    <td><input type="text" name="spec" required/></td>
  </tr>

  <tr>
    <th scope="row"> Date Ended </th>
    <td><input type="text" name="spec" required/></td>
  </tr>

  <tr>
    <th scope="row"> Coordinator Name </th>
    <td><input type="text" name="spec" required/></td>
  </tr>

  <tr>
    <th scope="row"> Coordinator Contact Number </th>
    <td><input type="text" name="spec" required/></td>
  </tr>

  <tr>
    <th scope="row"> Description </th>
    <td><input type="text" name="spec" required/></td>
  </tr>
   
  <tr>
    <th colspan="2" scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <p><center><input type="submit" name="save" value="Submit"/> </center> 
  </tr>
</table>
</form>
</div>
</center>




		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>

</html>
<?php }  ?>
