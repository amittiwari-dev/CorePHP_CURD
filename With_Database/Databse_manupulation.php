<?php
$serverName="localhost";
$username="root";
$password="";
$conn=mysqli_connect($serverName,$username,$password);
if(!$conn)
{
    die("Connection failed : ".mysqli_connect_error());
}
echo "Connected Successfully....";
$sql="Create database DemoCURD";
if(mysqli_query($conn,$sql))
{
    echo "Database Created succefully....";
}
else
{
    echo "Error".mysqli_error($conn);
}
?>