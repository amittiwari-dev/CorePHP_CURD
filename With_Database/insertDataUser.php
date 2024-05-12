<?php
if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $college=$_POST['college'];
    $pic=$_POST['pic'];

$conn=mysqli_connect("localhost","root","","curd_operation");
if(!$conn)
{
    die("Connection Error".mysqli_connect_error($conn));
}
else
{
    echo "Connection Successfully....";
}
$sql="insert into tbl_insert(name,email,college_name,photo) values('$name','$email','$college','$pic')";

if(!$conn->query($sql,))
{
    echo "Inserting Error..".mysqli_connection_error($conn);
}
else
{
    echo "Inserted Successfully";
}
}

?>

<html>
    <head></head>
    <body>
        <form  method="post">    
            Name :-    
        <input type="text" name="name" /><br/>
        Email :-    
        <input type="text" name="email" /><br/>
        College :-
        <input type="text" name="college" /><br/>
        Photo :- 
        <input type="text" name="pic" /><br/>
       <input type="submit" name="save" value="Save Data"  /><br/>
        </form>

       
    </body>
</html>