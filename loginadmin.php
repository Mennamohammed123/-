<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>الاشموني</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/a.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&#038;display=swap" rel="stylesheet" />
  </head>
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
    <!-- Start Header -->
    <div class="header" id="header">
      <div class="container" >
      
        <a href="a.php" class="logo"><img src="img/Logo.png" alt="" ></a>
     
      </div>
    </div>
    <!-- End Header -->

	
<body>

  	<h2 class="h2_form">تسجيل دخول الادمن</h2>
 
	 
  <form method="post" action="loginadmin.php" class="loginform">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>الاسم</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>الرقم السري</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">دخول</button>
  	</div>
  
  </form>

    <!-- Start Footer -->
	<?php include('footer.php'); ?>
      <!-- End Footer -->
 
</body>
</html>