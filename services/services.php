<?php 
require '../db.php';
require '../includes/header.php';
$select_services="SELECT * FROM services_section";
$select_services_res=mysqli_query($db_connection,$select_services);
?>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white">Services List</h3>
            </div>
            <div class="card-body">
                <?php if(isset( $_SESSION['status_update'])){?>
                    <div class="alert alert-success"><?= $_SESSION['status_update']?></div>
                <?php }unset( $_SESSION['status_update'])?>
                <?php if(isset( $_SESSION['delete'])){?>
                    <div class="alert alert-success"><?= $_SESSION['delete']?></div>
                <?php }unset( $_SESSION['delete'])?>
                <?php if(isset( $_SESSION['update'])){?>
                    <div class="alert alert-success"><?= $_SESSION['update']?></div>
                <?php }unset( $_SESSION['update'])?>
                <table class="table table-bordered">
                   <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                   </tr>
                   <?php foreach($select_services_res as $sl=>$services){?>
                   <tr>
                    <td><?=$sl+1?></td>
                    <td><?=$services['title']?></td>
                    <td><?=$services['description']?></td>
                    <td>
                        <a href="status.php?id=<?=$services['id']?>" class="badge badge-<?=$services['status']==1?'success':'light'?>"><?=$services['status']==1?'Active':'Deactive'?></a>
                    </td>
                    <td width="100">
                    <a href="services_update.php?id=<?=$services['id']?>" class="btn btn-info shadow btn-xs  sharp "><i class="fa fa-pencil"></i></a>
                    <a data-link="delete.php?id=<?=$services['id']?>" data-toggle="modal"   data-target="#exampleModalCenter" class="btn btn-danger shadow btn-xs  sharp  delete"><i      class="fa fa-trash"></i></a>
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
                <h3 class="text-white">Services Added Info</h3>
            </div>
            <div class="card-body">
                <?php if(isset($_SESSION['services'])){?>
                    <div class="alert alert-success"><?=$_SESSION['services']?></div>
                <?php }unset($_SESSION['services'])?>
              <form action="services_post.php" method="POST">
                 <div class="mb-3">
                     <label class="form-label">Services Title</label>
                     <input type="text" name="title" class="form-control">
                 </div>   
                 <div class="mb-3">
                     <label class="form-label">Services Description</label>
                     <textarea name="description" class="form-control" rows="5"></textarea>
                 </div>  
                 <div>
                     <button type="submit" class="btn btn-info">Services Add</button>
                 </div>    
               </form>
                
            </div>
        </div>
    </div>
</div>

<?php require '../includes/footer.php'?>
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