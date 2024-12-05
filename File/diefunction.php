<?php
if(file_exists("mytestfile.txt")){
    $file= fopen("mytestfile.txt","r");
    echo fread($file, filesize("mytestfile.txt"));//to read the content of file
}else{
    die("Error: The file does not exist");
}
?>
