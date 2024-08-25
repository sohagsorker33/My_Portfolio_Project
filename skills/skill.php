<?php 
require '../db.php';
require '../includes/header.php';
$select_skill="SELECT * FROM skills";
$select_skill_res=mysqli_query($db_connection,$select_skill);

?>
 <div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white">Skill_Lists</h3>
            </div>
            <div class="card-body">
             <?php if(isset( $_SESSION['status'])){?>
                  <div class="alert alert-success"><?= $_SESSION['status']?></div>
             <?php }unset( $_SESSION['status'])?>
             <?php if(isset( $_SESSION['deleted'])){?>
                <div class="alert alert-success"><?= $_SESSION['deleted']?></div>
             <?php }unset( $_SESSION['deleted'])?>
             <?php if(isset( $_SESSION['update'])){?>
                    <div class="alert alert-success"><?= $_SESSION['update']?></div>
                <?php }unset( $_SESSION['update'])?>
                <table class="table table-bordered"> 
                    <tr>
                        <th>SL</th>
                        <th>Skill_name</th>
                        <th>Percentage</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($select_skill_res as $sl=>$skill){?>
                   <tr>
                       <td><?=$sl+1?></td>
                       <td><?=$skill['skill_name']?></td>
                       <td><?=$skill['percentage']?></td>
                       <td>
                        <a href="status.php?id=<?=$skill['id']?>" class="badge badge-<?=$skill['status']==1?'success':'light'?>"><?=$skill['status']==1?'Active':'Deactive'?></a>
                       </td>
                       <td>
                       <a href="edit.php?id=<?=$skill['id']?>" class="btn btn-info shadow btn-xs  sharp"><i class="fa fa-pencil"></i></a>
                       <a data-link="delete.php?id=<?=$skill['id']?>" data-toggle="modal"   data-target="#exampleModalCenter" class="btn btn-danger shadow btn-xs  sharp  delete"><i      class="fa fa-trash"></i></a>
                       </td>
                   </tr>
                   <?php }?>
            </table>
        </div>
    </div>
   </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white">Skill Add Info</h3>
            </div>
            <div class="card-body">
                <?php if(isset($_SESSION['skill_add'])){ ?>
                   <div class="alert alert-success" ><?=$_SESSION['skill_add']?></div>
                <?php }unset($_SESSION['skill_add'])?>
                <form action="skill_post.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Skill_name</label>
                        <input type="text" class="form-control" name="skill_name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Percentage </label>
                        <input type="text" class="form-control" name="percentage">
                    </div>
                    <div class="mb-3">
                       <button type="submit" class="btn btn-info">Skill Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require '../includes/footer.php' ?>
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
    <script>
        $('.delete').click(function(){
          let link=$(this).attr('data-link');
          $('.yes').click(function(){
            window.location.href=link;
          })
        });
    </script>