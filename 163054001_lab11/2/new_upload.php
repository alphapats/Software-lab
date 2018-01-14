<?php
session_start();
session_regenerate_id();
if(!isset($_SESSION["username"]) && !isset($_SESSION["password"]))      // if there is no valid session
{
    header("Location: index.php");
}
?>

<!DOCTYPE HTML>
<html>
	<head>
    	<!-- Title of Page -->
        <title>
       		UPLOAD FILE SELECT PAGE
        </title>
        
        <!-- jQuery local -->
        <script src="../base/jquery.js"></script>
        
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">        
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		
		<script>
		function validate()
		{


			 var file1 = document.getElementById("fileinput");

             var filename=file1.value;
            var file_extension = filename.split('.').pop();
        
        if(file_extension != 'jpg')     
        {
            alert("Please select file of type .jpg");
            return false;
        }
       
        alert("File is OK for upload");
        return true;
        
    


        
            /* for multiple fiels
        if ('files' in x) {
        	if (x.files.length == 0) {
            alert( "Select one or more files.");
            return;
        	} 
        	else if (x.files.length >10) {
            alert("Select maximum 10 image .jpg files.");
            return;
        	} 
        	else
        	{
            for (var i = 0; i < x.files.length; i++) {
                var file = x.files[i];
                if ('name' in file) 
                {
                    var filename=file.name;
					var file_extension = filename.split('.').pop(); 
					if(file_extension != 'jpg')		
					{
		   			 alert("Please select file of type .jpg");
					return;
					}

                }
                
            	}
        	}
    	} 
		
		
		else
		{
		

        alert("File is being uploaded");
		return true;
        	} */
	
		}
		</script>
                
    </head>
    
    <body>
    
    	 <div class="container">
        	
        	<!-- Class row indicates a new page wide divison -->
            <div class="row">
            
            	<div class="col-xs-12 page-header">
                	<span style="font-size:24px">Upload Image</span>                		
                </div>
            </div>
        
        	<div class="row">
            	
            	<div class="col-xs-12 " style="min-height:500px;">
               		<form action="upload.php" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validate()">
						
						PLEASE UPLOAD YOUR FILE HERE(only .jpg file upto 200KB size)<br><br>
						<!--<input   type="file" name="fileinput[]" id="fileinput"  onchange="validate()" multiple /> <br> -->
                        <input   type="file" name="fileinput" id="fileinput"  onchange="validate()" /> <br>
						<input  type="submit" value="Upload File" name="submit" class="btn btn-primary"  /> <br>
					</form>
                </div>
                		
         	</div>
         	
         	<div class="row">
         		<div class="col-xs-12" style="text-align:center; background-color:black; color:white; padding:10px">
                    
                    <p>
                        <span class="glyphicon glyphicon-copyright-mark"></span> Prashanth, 2016 <br>
                        All Rights Reserved.
                    </p>
                </div>
            </div>
                        
       	</div>
        <!-- End of page container -->
         <?php 







          ?>                   
        
        
    </body>
</html>
