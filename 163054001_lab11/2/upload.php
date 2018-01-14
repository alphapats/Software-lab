


<?php
								
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileinput"]["name"]);

$f_name=1;
while($f_name <=10)
{
  $f_path= $target_dir .$f_name.".jpg";

  if (file_exists($f_path))
  {
    $f_name++;
  }
  else
  {
    $target_file = $f_path;
    break;
  }
}
//echo $target_file;
$uploadOk = 1;
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);

 // Check if file already exists
if ($f_name == 11) {
    echo "Sorry, Maximum 10 files can be uploaded";
    $uploadOk = 0;
	echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
    exit();
 }

// Check file size
if ($_FILES["fileinput"]["size"] > 200000) {
    echo "Sorry, your file is too large. File size is ".$_FILES["fileinput"]["size"]. " bytes .Please select file of size<200kb";
    $uploadOk = 0; 
    echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
    exit();
}

// Allow certain file formats
if($FileType != "jpg" ) {
    echo "Sorry, only jpg files are allowed.";
    $uploadOk = 0;
    echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
    exit();
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
    exit();
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileinput"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileinput"]["name"]). " has been uploaded as ".$target_file. ".";
        header("Location: album.php?&image_id=".$f_name);

    } else {
        echo "Sorry, there was an error uploading your file.";
        echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
        exit();
    }
}



?>
