<?php 
require '../db.php';
require '../includes/header.php';
$select="SELECT * FROM testimonial";
 $select_res=mysqli_query($db_connection,$select);
?>
<div class="row">
    <div class="col-lg-10 m-auto">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white">All Feedback</h3>
            </div>
            <div class="card-body">
                <?php if(isset($_SESSION['delete'])){?>
                   <div class="alert alert-success"><?=$_SESSION['delete']?></div>
                <?php }unset($_SESSION['delete'])?>
                 <table class="table table-bordered">
                    <tr>
                       <th>Sl</th>
                       <th>Name</th>
                       <th>Description</th>
                       <th>Message</th>
                       <th>Image</th>
                       <th>Action</th>
                    </tr>
                    <?php foreach($select_res as $sl=>$testimonial){?>
                    <tr>
                        <td><?=$sl+1?></td>
                        <td><?=$testimonial['name']?></td>
                        <td><?=$testimonial['description']?></td>
                        <td><?=$testimonial['message']?></td>
                        <td>
                            <?php if($testimonial['image']==null){?>
                                <!-- <img src="../uploads/testimonial/Ud.png" width="100"> -->
                                 <div class="text-danger fs-30" style="text-align:center; background-color:gray; width:100px; height:100px;line-height:100px; border-radius:50%"><?=substr($testimonial['name'],0,2)?></div>
                            <?php }else{?>
                            <img src="../uploads/testimonial/<?=$testimonial['image']?>" width="100">
                            <?php }?> 
                        </td>
                        <td>
                           <a href="delete.php?id=<?=$testimonial['id']?>" class="btn btn-danger shadow btn-xs  sharp"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php }?>
                 </table>
            </div>
        </div>
    </div>
</div>
 
<?php require '../includes/footer.php' ?>