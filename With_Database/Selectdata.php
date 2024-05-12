<?php
$conn=mysqli_connect("localhost","root","","curd_operation");

$sql1="Select * from tbl_insert";
$result=$conn->query($sql1);
$a=$_GET['stid'];
if($a!=null)
{
$delR="Delete from tbl_insert where sr=$a";
$recodsDel=$conn->query($delR);
}
?>
<html>
    <head></head>
    <body>
        <a href="insertDataUser.php"><Button>Add New User</Button></a>
        <form>
    <table border="2">
            <thead>
                <tr>
                <th>Sr no.</th>
                <th>Name</th>
                <th>Email</th>
                <th>College Name</th>
                <th>Pic Name</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($result->num_rows > 0)
                { $x=1;
                    while($data=$result->fetch_assoc() )
                    { ?>
                    <tr>
                        <td><?php echo $x;?></td>
                        <td><?php echo $data['name'];?></td>
                        <td><?php echo $data['email'];?></td>
                        <td><?php echo $data['college_name'];?></td>
                        <td><?php echo $data['photo'];?></td>
                        <td>
                            <a href="Selectdata.php?stid=<?php echo $data['sr']?>">Delete</a>
                            <a href="EditData.php?stid=<?php echo $data['sr']?>">Edit</a>
                        </td>
                    </tr>
                        
                    <?php $x++;}}?>
            </tbody>
        </table>
        </form>
    </body>
</html>