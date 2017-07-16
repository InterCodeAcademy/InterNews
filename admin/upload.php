<?php
$target_dir = "../model/Noticias/img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
       $uploadOk = 1;
    } else {
       
        $uploadOk = 0;
    }

if($uploadOk != 0){
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 2;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 3;
}
}
if ($uploadOk == 0) {

   echo' <div class="alert alert-danger">
   No subiste una imagen :( 
</div>';
   
}else if($uploadOk == 2){
 echo' <div class="alert alert-danger">
    Tu imagen es muy grande
</div>';
}else if($uploadOk==3){
 echo' <div class="alert alert-danger">
        El formato de tu imagen no es soportado
</div>';
} else {
    $temp = explode(".", $_FILES["fileToUpload"]["name"]);
    $newfilename =round(microtime(true)) . '.' . end($temp);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . $newfilename)) {
        echo "The file ". $newfilename. " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>