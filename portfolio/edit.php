<?php 
require '../db.php';
require '../includes/header.php';
$id=$_GET['id'];
$select="SELECT * FROM portfolio WHERE id='$id'";
$select_res=mysqli_query($db_connection,$select);
$select_fetch_assoc=mysqli_fetch_assoc($select_res);
?>
<div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white">Portfolio Edit</h3>
            </div>
            <div class="card-body">
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                   <input type="hidden" name="id" value="<?=$select_fetch_assoc['id']?>">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="<?=$select_fetch_assoc['title']?>">
                    </div>
                    <div class="mb-3">
                    <label class="form-label">Category</label>
                    <input type="text" class="form-control" name="category" value="<?=$select_fetch_assoc['category']?>">
                    </div>
                    <div>
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control mb-2" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                    <div>
                        <img src="../uploads/portfolio_image/<?=$select_fetch_assoc['image']?>" alt="" width="200" id="blah" class=" mb-2">
                    </div>
                    <?php if(isset( $_SESSION['err'])){?>
                        <strong class='text-danger'><?=$_SESSION['err']?></strong>
                     <?php }unset($_SESSION['err'])?>  
                    </div>
                    <div>
                      <button type="submit" class="btn btn-info">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require '../includes/footer.php'?>