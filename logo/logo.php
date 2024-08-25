<?php 
require '../db.php';

require '../includes/header.php';
$select_logo="SELECT * FROM logo_images";
$select_logo_res=mysqli_query($db_connection,$select_logo);
$select_logo_assoc=mysqli_fetch_assoc($select_logo_res);


?>
<div class="row">
  <div class="col-lg-6 m-auto">
    <div class="card">
        <div class="card-header bg-info">
            <h3 class="text-white">Changes Logo</h3>
        </div>
        <div class="card-body">
            <?php if(isset(  $_SESSION['logo_update'])){?>
                <div class="alert alert-success"><?=$_SESSION['logo_update']?></div>
            <?php }unset($_SESSION['logo_update'])?>
            <form action="logo_update.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Header logo</label>
                    <input type="file" name="header_logo" class="form-control"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                    <div class="mb-2">
                        <img src="../uploads/logos/<?=$select_logo_assoc['header_logo']?>" alt="" id="blah" width="150">
                    </div>
                    <?php if(isset($_SESSION['err'])){?>
                      <strong class="text-danger"><?=$_SESSION['err']?></strong>
                    <?php }unset($_SESSION['err'])?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Footer logo</label>
                    <input type="file" name="footer_logo" class="form-control"  onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])">
                    <div class="mb-2">
                        <img src="../uploads/logos/<?=$select_logo_assoc['footer_logo']?>" alt="" id="blah2" width="150">
                    </div>
                    <?php if(isset($_SESSION['error'])){?>
                      <strong class="text-danger"><?=$_SESSION['error']?></strong>
                    <?php }unset($_SESSION['error'])?>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

<?php require '../includes/footer.php'?>