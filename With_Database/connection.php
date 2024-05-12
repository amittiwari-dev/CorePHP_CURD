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

?>