<?php
$serverName="localhost";
$userName="root";
$password="";
$dbname="curd_operation";
$conn=mysqli_connect($serverName,$userName,$password,$dbname);
if(!$conn)
{
    die('Error Connection Failed'.mysqli_connect_error());
}
else
{
    echo "Connection Successfully....";
}
$sql="
create table tbl_student(st_id int primary key auto_increment,st_name varchar(255),st_email varchar(255),st_contact bigint, st_photo varchar(255))
";
if(!$conn->query($sql))
{
    echo "Table Create Error".mysqli_error($conn);
}
else
{
    echo "Table Created.....";
}

?>
