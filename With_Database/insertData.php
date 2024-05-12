<?php
$conn=mysqli_connect("localhost","root","","curd_operation");
if(!$conn)
{
    die("Connection Error".mysqli_connect_error($conn));
}
else
{
    echo "Connection Successfully....";
}
$sql="insert into tbl_insert(name,email,college_name,photo) values('Amit','ak9517462621@gmail.com','SRGP Chandauli','02.png')";
if(!$conn->query($sql))
{
    echo "Inserting Error..".mysqli_connection_error($conn);
}
else
{
    echo "Inserted Successfully";
}

?>
