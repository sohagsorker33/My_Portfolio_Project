 <?php 
 require '../db.php';
 require '../includes/header.php';
 $select="SELECT * FROM portfolio";
 $select_res=mysqli_query($db_connection,$select);
 ?>

 <div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white">Portfolio Lists</h3>
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
                <?php }unset($_SESSION['update'])?>
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($select_res as $sl=>$portfolio){?>
                    <tr>
                        <td><?=$sl+1?></td>
                        <td><?=$portfolio['title']?></td>
                        <td><?=$portfolio['category']?></td>
                        <td>
                            <img src="../uploads/portfolio_image/<?=$portfolio['image']?>" alt="" width="100">
                        </td>
                        <td>
                            <a href="status.php?id=<?=$portfolio['id']?>" class="badge badge-<?=$portfolio['status']==1?'success':'light'?>"><?=$portfolio['status']==1?'Active':'Deactive'?></a>
                        </td>
                        <td width="100">
                        <a href="edit.php?id=<?=$portfolio['id']?>" class="btn btn-info shadow btn-xs  sharp "><i class="fa fa-pencil"></i></a>
                        <a data-link="delete.php?id=<?=$portfolio['id']?>" data-toggle="modal"   data-target="#exampleModalCenter" class="btn btn-danger shadow btn-xs  sharp  delete"><i      class="fa fa-trash"></i></a>
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
                <h3 class="text-white">Add new portfolio</h3>
            </div>
            <div class="card-body">
                <?php if(isset( $_SESSION['image'])){?>
                  <div class="alert alert-success"><?= $_SESSION['image']?></div>
                <?php }unset($_SESSION['image'])?>
                <form action="portfolio_post.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                    <label class="form-label">Category</label>
                    <input type="text" class="form-control" name="category">
                    </div>
                    <div>
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control mb-2" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                    <div>
                        <img src="" alt="" width="200" id="blah" class=" mb-2">
                    </div>
                    <?php if(isset( $_SESSION['err'])){?>
                        <strong class='text-danger'><?=$_SESSION['err']?></strong>
                     <?php }unset($_SESSION['err'])?>   
                    </div>
                    <div>
                      <button type="submit" class="btn btn-info">Add portfolio</button>
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