<?php 
 require '../db.php';
 $select_about="SELECT * FROM about_section";
 $select_about_res=mysqli_query($db_connection,$select_about);
 $select_about_assoc=mysqli_fetch_assoc($select_about_res);
 require '../includes/header.php';
 
?>
<div class="row">
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white">About section photo updated</h3>
            </div>
            <div class="card-body">
                <?php if(isset($_SESSION['success'])){?>
                   <div class="alert alert-success"><?=$_SESSION['success']?></div>
                <?php }unset($_SESSION['success'])?>
               <form action="about_update_image.php" method="post" enctype="multipart/form-data">
                 <div class="mb-3">
                    <label class="form-label">Photo update</label>
                    <input type="file" class="form-control"  name="photo"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                    <div class="mb-3">
                        <img src="../uploads/about_photo/<?=$select_about_assoc['photo']?>" id="blah" alt="" width="120">
                    </div>
                    <?php if(isset( $_SESSION['arr'])){?>
                     <strong class="text-danger"><?= $_SESSION['arr']?></strong>
                    <?php }unset( $_SESSION['arr'])?>
                 </div>
                 <div class="mb-3">
                     <button type="submit" class="btn btn-info">Update</button>
                 </div>
               </form>
            </div>
        </div>
    </div>
     <div class="col-lg-7">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white">About section text updated</h3>
            </div>
            <div class="card-body">
               <?php if(isset($_SESSION['update'])){?>
                  <div class="alert alert-success"><?=$_SESSION['update']?></div>
                <?php }unset($_SESSION['update'])?>
                <form action="about_update.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="<?=$select_about_assoc['title']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="<?=$select_about_assoc['name']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Textarea</label>
                        <textarea name="description" class="form-control" rows="5"><?=$select_about_assoc['description']?></textarea>
                    </div>
                    <div class="mb-3">
                       <button type="submit" class="btn btn-info">submit</button>
                    </div>
                </form>
            </div>
        </div>
     </div>
</div>

<?php require '../includes/footer.php' ?>