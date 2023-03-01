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
<?php 

// Include the database configuration file  
require_once 'server.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
$image_name = "";
if(isset($_POST["submit"])){ 
    $status = 'error'; 
   // $image_name = mysqli_real_escape_string($db, $_POST['image_name']);
  // $db->query( "INSERT INTO images (image_name) VALUES('$image_name')");
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif','jfif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
           
            $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent' ,NOW())"); 
           if($insert){ 
                $status = 'success'; 
                $statusMsg = "تم تحميل الصورة بنجاح"; 
            }else{ 
                $statusMsg = "خطأ في التحميل حاول مرة اخري "; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'ارجو اختيار الصوره لتحميل'; 
    } 
} 

?>

 <style>

	   form   {
	    width: 42%;
    margin: 0px auto;
    padding: 11px;
    margin-top: 165px;
    margin-bottom: 165px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 57px 0px 57px 0px;
    text-align: center;
    direction:rtl;
    
}

 label {
    color: rgb(14 19 42);
    font-size: 20px;
    font-weight: bold;

}

	
table{
         font-family:  Times, serif;
            width: 60%;
        margin: 30px auto;
        border-collapse: collapse;
        text-align: left;
     border: 7px solid rgb(14 19 42);
     background-color: rgb(14 19 42);
    }
    
    th, td {
      text-align: center;
      padding: 8px;
     font-family: Arial, Helvetica, sans-serif;
     font-size: 20px;
      color: white;
      }
    td{
        padding: 8px;
        text-align: center;
        background-color: white;
    color: black;}
    th {
        text-align: center;
        background-color: rgb(14 19 42);
    font-size: 25px;
    }
    
    
    .del_btn {
         font-size: 20px;
        text-decoration: none;
        padding: 7px 9px;
        color: white;
        border-radius: 3px;
        background: #800000;
    }
    .msg {
        margin: 30px auto; 
        padding: 10px; 
        border-radius: 5px; 
        color: white; 
        background: black; 
        border: 1px solid #bc1414;
        width: 50%;
        text-align: center;
    }
     </style>

	  </style>
      <!-- Start header -->
      <?php include('header.php');  ?>
      <!-- End header -->

    <form action="" method="post" enctype="multipart/form-data">
    <?php // Display status message 
    echo $statusMsg; ?>
    <br>
    <br>
    <label>اختر صورة:</label>
    <input type="file" name="image" >
  
    <input  class="btn"type="submit" name="submit" value="تحميل">
  
    </form>

    
    
     <!--===============================================================================================-->	
    
      <?php if (isset($_SESSION['message'])): ?>
        <div class="msg">
            <?php 
                echo $_SESSION['message']; 
                unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>

                
    
    
      <?php $results = mysqli_query($db, "SELECT * FROM  images"); ?>
    <table id="myTable">
        <thead>
            <tr>
          <th>صوره المشروع</th>
               
                <th>تاريخ</th>
                
                <th colspan="2">حذف</th>
            </tr>
        </thead>	
    
         
         <?php while ($row = mysqli_fetch_array($results)) { ?>
     
            <tr>
          <td><?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" width="300" height="300" />';  ?>  </td>  
       

                <td><?php echo $row['created']; ?></td>
                
                <td>
                    <a href="server.php?m_del=<?php echo $row['id']; ?>" class="del_btn">حذف</a>
                </td>
            </tr>
        <?php } ?>
     
    
    </table>
      


    
      <!-- Start Footer -->
   <?php include('footer.php'); ?>
      <!-- End Footer -->
      <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
        $("#myTable tr:first").show();
      });
    });
    </script>