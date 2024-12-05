<?php
if(isset($_FILES['image'])){
    $file_name= $_FILES['image']['name'];
    $file_size==$_FILES['image']['size'];
    $tempfile_name= $_FILES['image']['temp_name'];
    $file_type= $FILES['image']['type'];
    if(move_uploaded_file($tempfile_name,'upload/'.$file_name)){
        echo 'file uploaded';
    }else{
        echo "couldn't upload file";
    }
}
?>

<html>
    <body>
        <form action= "" method="POST" enctype="multipart/form-data">
            <input type= "file" name="image"  >
            <input type= "submit" name="submit" value="upload">
</form>
</body>
</html>
