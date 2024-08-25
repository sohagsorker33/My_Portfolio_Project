<?php 
require '../db.php';
require '../includes/header.php';
$id=$_GET['id'];
$select="SELECT * FROM services_section  WHERE id='$id'";
$select_res=mysqli_query($db_connection,$select);
$select_fetch_assoc=mysqli_fetch_assoc($select_res);
?>
<div class="row">
<div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white">Services Update Info</h3>
            </div>
            <div class="card-body">
                <?php if(isset($_SESSION['services'])){?>
                    <div class="alert alert-success"><?=$_SESSION['services']?></div>
                <?php }unset($_SESSION['services'])?>
              <form action="update.php" method="POST">
                 <div class="mb-3">
                    <input type="hidden" name="id" value="<?=$select_fetch_assoc['id']?>">
                     <label class="form-label">Services Title</label>
                     <input type="text" name="title" class="form-control" value="<?=$select_fetch_assoc['title']?>">
                 </div>   
                 <div class="mb-3">
                     <label class="form-label">Services Description</label>
                     <textarea name="description" class="form-control" rows="5"><?=$select_fetch_assoc['description']?></textarea>
                 </div>  
                 <div>
                     <button type="submit" class="btn btn-info">Update</button>
                 </div>    
               </form>
                
            </div>
        </div>
    </div>
</div>
<?php require '../includes/footer.php'?>