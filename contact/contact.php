<?php 
require '../db.php';
require '../includes/header.php';
$select="SELECT * FROM contact";
$select_res=mysqli_query($db_connection,$select);
?>
 <div class="row">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white"> All Contact Info</h3>
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
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($select_res as $sl=>$contact){?>
                    <tr class="<?=$contact['status']==1?'':'bg-dark text-white'?>">
                        <td><?=$sl+1?></td>
                        <td><?=$contact['name']?></td>
                        <td><?=$contact['email']?></td>
                        <td><?=$contact['subject']?></td>
                        <td><?=$contact['message']?></td>
                        <td width="100">
                        <a href="view.php?id=<?=$contact['id']?>" class="btn btn-success shadow btn-xs      sharp"><i class="fa fa-eye"></i></a>
                        <a href="delete.php?id=<?=$contact['id']?>" class="btn btn-danger shadow btn-xs      sharp"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>
 </div>
<?php require '../includes/footer.php'?>