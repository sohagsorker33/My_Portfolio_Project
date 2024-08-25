<?php require '../db.php' ?>
<?php require '../includes/header.php' ?>
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white">Profile Update Info</h3>
            </div>
            <div class="card-body">
                <?php if(isset($_SESSION['success'])){?>
                   <div class="alert alert-success"><?=$_SESSION['success']?></div>
                <?php }unset($_SESSION['success']) ?>
                <form action="profile_update.php" method="post">
                    <div class="mb-2">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="<?= $after_assoc_log['Name']?>">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">email</label>
                        <input type="email" class="form-control" name="email" value="<?= $after_assoc_log['Email']?>">
                    </div>
                    <div class="mb-2">
                    <label class="form-label">Select your Country</label>
                        <select name="country" class="form-control">
                            <option value="">Choice your country</option>
                            <option value="BAN"<?=($after_assoc_log['Country']=='BAN')?'selected':''?>>BAN</option>
                            <option value="IND"<?=($after_assoc_log['Country']=='IND')?'selected':''?>>IND</option>
                            <option value="PIK"<?=($after_assoc_log['Country']=='PIK')?'selected':''?>>PIK</option>
                            <option value="BIZ" <?=($after_assoc_log['Country']=='BIZ')?'selected':''?>>BIZ</option>
                            <option value="ARG"<?=($after_assoc_log['Country']=='ARG')?'selected':''?>>ARG</option>
                            <option value="USE"<?=($after_assoc_log['Country']=='USE')?'selected':''?>>USE</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Select your Gender</label>
                        <div class="form-check">
                        <input class="form-check-input" <?=($after_assoc_log['Gender']=='male')?'checked':''?> name="gender" type="radio" value="male"  >
                        <label class="form-check-label">
                         Male
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" <?=($after_assoc_log['Gender']=='female')?'checked':''?> name="gender" type="radio" value="female" >
                        <label class="form-check-label">
                         Female
                        </label>
                        </div>
                   </div>
                    <div class="mb-2">
                       <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white">Password Updated</h3>
            </div>
            <div class="card-body">
                <?php if(isset($_SESSION['update'])){?>
                   <div class="alert alert-success"><?=$_SESSION['update']?></div>
                <?php }unset($_SESSION['update']) ?>
                <form action="password_update.php" method="post">
                    <div class="mb-2">
                        <input type="hidden" name="user_id" value="<?= $after_assoc_log['ID']?>">
                        <label class="form-label">Crruent_Password</label>
                        <input type="password" class="form-control" name="crruent_Password">
                        <?php if(isset($_SESSION['crruent_pass_arr'])){?>
                         <strong class="text-danger"><?=$_SESSION['crruent_pass_arr']?></strong>
                        <?php }unset($_SESSION['crruent_pass_arr']) ?>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">New_password</label>
                        <input type="password" class="form-control" name="new_password">
                        <?php if(isset($_SESSION['new_pass_arr'])){?>
                         <strong class="text-danger"><?=$_SESSION['new_pass_arr']?></strong>
                        <?php }unset($_SESSION['new_pass_arr']) ?>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Confram_Password</label>
                        <input type="password" class="form-control" name="confram_Password">
                        <?php if(isset($_SESSION['con_pass_arr'])){?>
                         <strong class="text-danger"><?=$_SESSION['con_pass_arr']?></strong>
                        <?php }unset($_SESSION['con_pass_arr']) ?>
                    </div>
                    <div class="mb-2">
                       <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <div class="col-lg-4">
            <div class="card-header bg-info">
                <h3 class="text-white">Profile Update Info</h3>
            </div>
            <div class="card-body">
                <?php if(isset( $_SESSION['photo'])){ ?>
                <div class="alert alert-success"><?= $_SESSION['photo']?></div>
                <?php }unset( $_SESSION['photo'])?>
                <form action="photo_update.php" method="post" enctype="multipart/form-data"> 
                    <div class="mb-2">
                        <input type="hidden" name="user_id" value="<?=$after_assoc_log['ID']?>">
                        <label class="form-label">Photo_Update</label>
                        <input type="file" class="form-control" name="photo" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <?php if(isset($_SESSION['err'])){ ?>
                            <strong class="text-danger"><?=$_SESSION['err']?></strong>
                        <?php }unset($_SESSION['err']) ?>
                        <div class="mb-2">
                        <img src="" alt="" id="blah" width="150">
                       </div>  
                         
                    <div class="mb-3">
                        <button type="submit" class="btn btn-info" >Submit</button>
                    </div>
                </form>
            </div>
    </div>
 </div>

<?php require '../includes/footer.php' ?>
