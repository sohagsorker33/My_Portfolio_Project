<?php 

require '../db.php';
$id=$_GET['id'];
$select="SELECT * FROM skills WHERE id='$id'";
$select_res=mysqli_query($db_connection,$select);
$select_res_assoc=mysqli_fetch_assoc($select_res);
require '../includes/header.php';

?>
 <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white">Skill Edit Info</h3>
            </div>
            <div class="card-body">
                <form action="edit_post.php" method="post">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <label class="form-label">Skill_name</label>
                        <input type="text" class="form-control" name="skill_name" value="<?=$select_res_assoc['skill_name']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Percentage </label>
                        <input type="text" class="form-control" name="percentage" value="<?=$select_res_assoc['percentage']?>">
                    </div>
                    <div class="mb-3">
                       <button type="submit" class="btn btn-info">Skill Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php require '../includes/footer.php'?>