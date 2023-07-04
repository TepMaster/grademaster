<script src="/assets/sweetalert.min.js"></script>

<?php
if(!isset($_SESSION["usr_id"])){header("Location:/");}

require "helper.php";

//upload to db
$salt =generateRandomString(32);
$arr = array("n"=>$_POST["num"],"r"=>"Profesor","c"=>"");

DB::insert('logins', [
    'email' =>  $_POST["em"],
    'salt' => $salt,
    'pass' => hash("sha256",$_POST["pass"].$salt),
    'rank'=> 1,
    'poza'=>'+4'.$_POST["nr"],
    'data'=> json_encode($arr)]);
$row = DB::queryFirstRow("SELECT id FROM logins WHERE email=%s LIMIT 1", $_POST["em"]);



$target_dir = "images/profile/";
$target_file = $target_dir . $row["id"].'.png';
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["num"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

echo '<script type="text/javascript">',
'swal("User Adaugat!", "Ati adaugat userul cu succes!", "success").then(function() {
    
    window.location ="/adm/add";
});',
'</script>';
?>
