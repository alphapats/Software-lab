<!DOCTYPE HTML>
<html>
	<head>
    	<!-- Title of Page -->
        <title>
       		163054001 FREQUENCY COUNT
        </title>
        
        <!-- jQuery local -->
        <script src="../base/jquery.js"></script>
        
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">        
		<script src="../bootstrap/js/bootstrap.min.js"></script>
                
    </head>
    
    <body>
    	<!-- Page Content -->
        <div class="container">
        	
        	<!-- Class row indicates a new page wide divison -->
            <div class="row">
            
            	<div class="col-xs-12 page-header">
                	<span style="font-size:24px">Processed Output</span>                		
                </div>
            </div>
        	
        	
        	<!-- Class row indicates a new page wide divison -->
            <div class="row">
                     	
            
            	<div class="col-xs-12">
					
							
<?php
								
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileinput"]["name"]);
$uploadOk = 1;
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file already exists
//if (file_exists($target_file)) {
   // echo "Sorry, file already exists.Overwriting of file not permitted.Please select other file";
    //$uploadOk = 0;
   // exit();
//}
// Check file size
if ($_FILES["fileinput"]["size"] > 100000) {
    echo "Sorry, your file is too large.PLease select file of size<100kb";
    $uploadOk = 0;
    exit();
}

// Allow certain file formats
if($FileType != "txt" ) {
    echo "Sorry, only txt files are allowed.";
    $uploadOk = 0;
    exit();
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    exit();
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileinput"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileinput"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
        exit();
    }
}

$myfile = fopen($target_file, "r") or die("Unable to open file!");

/* get content of file in $content */
$content = strtolower(file_get_contents($target_file));
 
/* split $content into array of substrings of $content i.e wordwise */
$wordArray = preg_split('/[^a-z]/', $content, -1, PREG_SPLIT_NO_EMPTY);
//$wordArray = str_word_count($content, 1);

/* get associative array of values from $filteredArray as keys and their frequency count as value */
$wordFrequencyArray = array_count_values($wordArray);
 
/* Sort array from higher to lower, keeping keys */
ksort($wordFrequencyArray);
 echo " <table class='table table-striped table-bordered'>";
 echo " <tr><th> Word </th> <th> Occurence </th></tr> ";
foreach ($wordFrequencyArray as $printword => $frequency)
  echo "<tr><td>".$printword." </td> <td> ".$frequency."</td> </tr>";

fclose($myfile);



							?>
							
					</table>
				</div>
			</div>
				
			<div class="row">
				<div class="col-xs-12">
				</div>
			</div>
				
			</div>
	</body>
</html>

