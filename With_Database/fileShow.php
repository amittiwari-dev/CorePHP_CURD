<?php
include 'Connection2.php';
$sql="select * from tbl_fileupload";
$result=mysqli_query($conn,$sql);
$sid=$_GET['sid'];
$status=$_GET['status'];
if($sid !="" && $status !="")
{
$sql1="update tbl_fileupload set status='$status' where id='$sid'";
$result1=mysqli_query($conn,$sql1);
}
?>
<html>
    <head></head>
    <body>
        <table border="2">
            <thead>
                <tr>
                    <th>Sr.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Images</th>
                    <th>Action</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($result->num_rows >0)
                {
                    $x=1;
                    while($data=$result->fetch_assoc())
                    {

                   
                ?>
                <tr>
                    <td><?php echo $x;?></td>
                    <td><?php echo $data['name']?></td>
                    <td><?php echo $data['email']?></td>
                    <td><img src="PhotoServer/<?php echo $data['pic']?>" style="height:70px" alt="Error" /></td>
                    <td><a href="#"><button style="background:red">Delete </button></a> <a href="#" ><button style="background:lightblue">Update</button></a></td>
                    <td>
                        <?php if($data['status']==1){?>
                        <a href="fileShow.php?sid=<?php echo $data['id'];?>&status=0"><button style="background:green">Active</button></a>
                        <?php } else{?>
                            <a href="fileShow.php?sid=<?php echo $data['id'];?>&status=1"><button style="background:red">Deactive</button></a>
                            <?php };?>
                    </td>
                    
                </tr>
                <?php  $x++;}};?>
            </tbody>
        </table>
    </body>
</html>