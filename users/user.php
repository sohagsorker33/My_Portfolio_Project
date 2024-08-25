 

<?php 
require '../db.php'
?>

<?php require '../includes/header.php'?>
<?php 
$select="SELECT * FROM users";
$select_data=mysqli_query($db_connection, $select);

?>
 <style>
        .pass{
            position: relative;
        }
        .pass i{
            position: absolute;
            top: 47px;
            right: 15px;
            font-size: 25px;
        }
    </style>

 <div class="row">
    <div class="col-lg-9">
        <div class="card">
        <?php if(isset( $_SESSION['success'])) {?>
        <div class="alert alert-success"><?= $_SESSION['success']?></div>
        <?php }unset( $_SESSION['success'])?>
            <div class="card-header bg-primary  ">
                <h3 class="text-white">Users List</h3>
                <?php if($after_assoc_log['Role']==1){?>
                 <a href="" class="btn btn-info" data-toggle="modal" data-target="#basicModal">Add New</a>
                 <?php }?>
                 <div class="modal fade show" id="basicModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary ">
                            <h3 class="text-white text-center">Add New Users</h3>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                               </div>
                            <div class="modal-body">
                                
                           <form action="../register_post.php" method="post">
                               <div class="mb-2">
                                <?php if(isset($_SESSION['name'])){
                                     $name=$_SESSION['name'];
                                }else{
                                    $name='';
                                }
                                ?>
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="<?=$name?>">
                                <?php if(isset($_SESSION['nam_arr'])){?>
                                  <strong class="text-danger"><?=$_SESSION['nam_arr']?></strong>
                                <?php } unset($_SESSION['nam_arr'])?>
                               </div>
                               <div class="mb-2">
                               <?php if(isset($_SESSION['email'])){
                                     $email=$_SESSION['email'];
                                }else{
                                    $email='';
                                }
                                ?>
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" value="<?=$email?>">
                                <?php if(isset($_SESSION['email_arr'])){?>
                                  <strong class="text-danger"><?=$_SESSION['email_arr']?></strong>
                                <?php } unset($_SESSION['email_arr'])?>
                               </div>
                               <div class="mb-2 pass">
                               <?php if(isset($_SESSION['password'])){
                                     $password=$_SESSION['password'];
                                }else{
                                    $password='';
                                }
                                ?>
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="pass" value="<?=$password?>">
                                <i class="fa-duotone fa-solid fa-eye show"></i>
                                <?php if(isset($_SESSION['pass_arr'])){?>
                                  <strong class="text-danger"><?=$_SESSION['pass_arr']?></strong>
                                <?php } unset($_SESSION['pass_arr'])?>
                               </div>
                               <div class="mb-2">
                               <?php if(isset($_SESSION['con_pass'])){
                                     $con_pass=$_SESSION['con_pass'];
                                }else{
                                    $con_pass='';
                                }
                                ?>
                                <label class="form-label">Confram_Password</label>
                                <input type="password" class="form-control" name="con_pass" value="<?=$con_pass?>">
                                <?php if(isset($_SESSION['con_pass_arr'])){?>
                                  <strong class="text-danger"><?=$_SESSION['con_pass_arr']?></strong>
                                <?php } unset($_SESSION['con_pass_arr'])?>
                               </div>
                               <div class="mb-2">
                               <?php if(isset($_SESSION['country'])){
                                     $country=$_SESSION['country'];
                                }else{
                                    $country='';
                                }
                                ?>
                                <label class="form-label">Select your Country</label>
                                <select name="country" class="form-control">
                                    <option value="">Choice your country</option>
                                    <option value="BAN" <?=($country=='BAN')?'selected':''?>>BAN</option>
                                    <option value="IND" <?=($country=='IND')?'selected':''?>>IND</option>
                                    <option value="PIK" <?=($country=='PIK')?'selected':''?>>PIK</option>
                                    <option value="BIZ"<?=($country=='BIZ')?'selected':''?>>BIZ</option>
                                    <option value="ARG"<?=($country=='ARG')?'selected':''?>>ARG</option>
                                    <option value="USE"<?=($country=='USE')?'selected':''?>>USE</option>
                                </select>
                                <?php if(isset($_SESSION['country_arr'])){?>
                                  <strong class="text-danger"><?=$_SESSION['country_arr']?></strong>
                                <?php } unset($_SESSION['country_arr'])?>
                               </div>
                               <div class="mb-2">
                               <?php if(isset($_SESSION['gender'])){
                                     $gender=$_SESSION['gender'];
                                }else{
                                    $gender='';
                                }
                                ?>
                                 <label class="form-label">Select your Gender</label>
                                 <div class="form-check">
                                 <input class="form-check-input" <?=($gender == 'male')?'checked':''?> name="gender" type="radio" value="male"  >
                                 <label class="form-check-label">
                                  Male
                                 </label>
                                 </div>
                                 <div class="form-check">
                                 <input class="form-check-input" <?=($gender == 'female')?'checked':''?> name="gender" type="radio" value="female" >
                                 <label class="form-check-label">
                                  Female
                                 </label>
                                 </div>
                               </div>
                               <?php if(isset($_SESSION['gen_arr'])){?>
                                  <strong class="text-danger"><?=$_SESSION['gen_arr']?></strong>
                                <?php } unset($_SESSION['gen_arr'])?>
                                <div class="mb-2">
                                    <label class="form-label">Photo</label>
                                    <input type="file" class="form-control" name="photo">
                                </div>
                               <div class="mb-2">
                                <button type="submit" value="submit" class="btn btn-info">submit</button>
                               </div>
                                   </form>
                            </div>  
                        </div>
                    </div>
               </div>
            </div>
            <div class="card-body">
                <?php if(isset($_SESSION['delete'])){?>
                  <div class="alert alert-success"><?=$_SESSION['delete']?></div>
                <?php }unset($_SESSION['delete'])?>
                <table class="table table-bordered">
                    <tr>
                       <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Country</th>
                        <th>Photo</th>
                        <?php if($after_assoc_log['Role']==1){?>
                        <th>Action</th>
                        <?php }?>
                    </tr>
                     <?php foreach($select_data as $sl=>$user){ ?>
                    <tr>
                       <td><?=$sl+1?></td>
                       <td><?=$user['Name']?></td>
                        <td><?=$user['Email']?></td>
                        <td><?=$user['Country']?></td>
                        <td><?=$user['Gender']?></td>
                        <td>
                           <?php if($user['Photo']==null){?>
                              <strong>No Preview Found</strong>
                            <?php }else{?>
                              <img src="../uploads/users/<?=$user['Photo']?>" alt="" width="100">
                            <?php }?>
                        </td>
                        <?php if($after_assoc_log['Role']==1){?>
                        <td>
                        
                        <a data-link="user_delete.php?id=<?=$user['ID']?>" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-danger shadow btn-xs  sharp  delete"><i class="fa fa-trash"></i></a>
                        </td>
                        <?php }?>
                        </tr>
                      <?php } ?>
                        
                </table>
            </div>
        </div>
    </div>
    <?php if($after_assoc_log['Role']==1){?>
    <div class="col-lg-3">
        <div class="card">
           <div class="card-header bg-info">
            <h3 class="text-white">Assign Role</h3>
           </div>
           <div class="card-body">
           <?php if(isset($_SESSION['success'])){?>
                  <div class="alert alert-success"><?=$_SESSION['success']?></div>
                <?php }unset($_SESSION['success'])?>
               <form action="role_update.php" method="post">
                 <div class="mb-3">
                 <label  class="form-label">Select Role</label>
                 <select name="role" class="form-control text-black">
                    <option value="">Select Role</option>
                    <option value="1">Super Admin</option>
                    <option value="2">Admin</option>
                    <option value="3">Moderator</option>
                    <option value="4">Editor</option>
                 </select>
                 </div>
                 <div class="mb-3">
                 <label  class="form-label">Select Users</label>
                 <select name="user" class="form-control text-black">
                    <option value="">Select User</option>
                    <?php foreach($select_data as $user){ ?>
                    <option value="<?=$user['ID']?>"><?=$user['Name']?></option>
                    <?php }?>
                 </select>
                 </div>
                 <div class="mb-3">
                    <button type="submit" class="btn btn-info">Assign Role </button>
                 </div>
               </form>
           </div>      
        </div>
    </div>
    <?php } ?>
 </div>
 <div class="modal fade" id="exampleModalCenter" style="display:none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
             <div class="modal-header bg-info">
             <h5 class="modal-title text-white">Are you suru want to delete this user?</h5>
            <button type="button" class="close" data-dismiss="modal"><span>×</span>
             </button>
            </div>
             
            <div class="modal-footer">
            <button type="button" class="btn btn-info light" data-dismiss="modal">No Don't</button>
             <button type="button" class="btn btn-danger yes">Yes Delete </button>
                </div>
            </div>
        </div>
    </div>
<?php require '../includes/footer.php'?>
<script>
    $('.delete').click(function(){
      let link=$(this).attr('data-link');
     $('.yes').click(function(){
         window.location.href=link;
     });
       
    });
</script>

<script>
     $('.show').click(function(){
        let click=document.getElementById('pass');
        if(click.type=='password'){
          click.type='text';
        }else{
            click.type='password';  
        }
     });
</script>


 