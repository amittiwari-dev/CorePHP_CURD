<?php
$servername="localhost";
$username="root";
$password="";
$dbname="curd_operation";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection Some Error".mysqli_connect_error());
}
echo "Connection Successfully.....";



?>