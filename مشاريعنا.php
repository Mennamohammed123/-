
<?php 
// Include the database configuration file  
require_once 'server.php'; 
 
// Get image data from database 
$result = $db->query("SELECT image FROM images ORDER BY id DESC"); 
?>
 <!-- Start header -->
 <?php include('mainheader.php'); ?>
      <!-- End header -->
<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
    <div class="containerg">
  
        
          <?php while($row = $result->fetch_assoc()){ ?> 
            <img  style=" max-width:100%" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php } ?> 
          
    </div>  </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>
 <!-- Start Footer -->
 <?php include('footer.php'); ?>
      <!-- End Footer -->
    