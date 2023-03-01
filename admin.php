
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: loginadmin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: loginadmin.php");
  }
?>
   <!-- Start header -->
   <?php include('header.php'); ?>
      <!-- End header -->
    
    <p style="    font-size: 20px;text-align: center;background-color: rgb(14 19 42);
                color: #E29E2A; margin: 0px auto;padding: 23px">في الاشموني للمقولات <strong><?php echo $_SESSION['username']; ?></strong> مرحبا بالادمن</p>

    <img style="width:100%; " src="img/admin.png" alt="">

       <!-- Start Footer -->
       <?php include('footer.php'); ?>
      <!-- End Footer -->
    
