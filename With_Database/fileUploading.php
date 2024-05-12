<?php
include 'Connection2.php';
if(isset($_POST['save']))
{
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=$_POST['email'];

    $fileName=$_FILES['pic']['name'];// name , tmp name , size and type return
    $tmpPath=$_FILES['pic']['tmp_name']; // tempory path 
    $path="PhotoServer/".$fileName;
    move_uploaded_file($tmpPath,$path);
    $sql="insert into tbl_fileupload(name,email,pic) values('$name','$email','$fileName')";
    $result=mysqli_query($conn,$sql);
    if($result!=null)
    {
        echo "Inserted Successfully.......";
    }
}

?>
<html>
    <head> </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            Name : 
            <input type="text" name="name" /><br/>
            Email : 
            <input type="email" name="email" /><br/>
            Photo : 
            <input type="file" name="pic" /><br/>
            <input type="Submit" name="save" value="Save Data" />
        </form>
    </body>
</html>