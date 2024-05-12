<?php  
$conn=mysqli_connect("localhost","root","","curd_operation");
$a=$_GET['stid'];
$sql1="select * from tbl_insert where sr=$a";
$result1=$conn->query($sql1);
if(isset($_POST['save']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $college=$_POST['college'];
  $pic=$_POST['pic'];
$sql="update tbl_insert set name='$name',email='$email',college_name='$college',photo='$pic' where sr='$a'";
$result=$conn->query($sql);


}
?>

<html>
    <head></head>
    <body>
        <form method="post">    
            <?php 
            if($result1->num_rows > 0)
            { $x=1;
                while($data1=$result1->fetch_assoc() )
                { 
                    ?>
            Name :-    
        <input type="text" name="name" value="<?php echo $data1['name']?>"/><br/>
        Email :-    
        <input type="text" name="email" value="<?php echo $data1['email']?>" /><br/>
        College :-
        <input type="text" name="college" value="<?php echo $data1['college_name']?>" /><br/>
        Photo :- 
        <input type="text" name="pic" value="<?php echo $data1['photo']?>" /><br/>
        <input type="submit" name="save" value="Update Now"  /><br/>
        <?php }};?>
        </form>

      
    </body>
</html>