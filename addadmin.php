<?php include('server.php') ?>
<?php 


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
<style>
.h2_form{
		  color: var(--main-color);
		  text-align: center;
		  margin-top: 50px;
	  }
	   form   {
	width: 30%;
    margin: 0px auto;
    padding: 20px;
	margin-top: 50px;
	margin-bottom: 50px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;
    text-align: center;
    direction: rtl;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: right;
  margin: 15px;

}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 20px;
  border-radius: 5px;
  border: 1px solid gray;
}

.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: right;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
	  </style>
<body>
  
  	<h2 class="h2_form">تسجيل ادمن جديد</h2>
  </div>
	
  <form method="post" action="addadmin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>اسم الادمن</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>البريد الاكتروني</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>الرقم السري</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label> تاكيد الرقم السري</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">تسجيل</button>
  	</div>
  
  </form>
   <!-- Start Footer -->
   <?php include('footer.php'); ?>
      <!-- End Footer -->
 
</body>
</html>