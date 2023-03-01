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
  <body>
    <!-- Start Header -->
    <div class="header" id="header">
      <div class="container">
        <ul class="main-nav">
        <li><a href="admin.php">الرئيسية</a></li>
            <li><a href="addimg.php">اضافة صور للمشاريع</a></li>
            <li><a href="addadmin.php">اضافة ادمن جديد</a></li>
          <li>
          <?php  if (isset($_SESSION['username'])) : ?>
        	<li> <a href="a.php?logout='1'" >تسجيل خروج</a> </li>
         <?php endif ?>
        
        </ul>
        <a href="a.php" class="logo"><img src="img/Logo.png" alt="" ></a>
     
      </div>
    </div>
    
    <!-- End Header -->