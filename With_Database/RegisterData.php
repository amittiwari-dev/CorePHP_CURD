<?php
include 'Connection2.php';
$sql="Select * from tbl_insert";
$result=mysqli_query($conn,$sql);
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
                        
                    </tr>
                        
                    <?php $x++;}}?>
            </tbody>
        </table>
        </form>
    </body>
</html>