<!DOCTYPE HTML>
<html>
	<head>
    	<!-- Title of Page -->
        <title>
       		163054001 FREQUENCY COUNT
        </title>
        
        <!-- jQuery local used for bootstrap -->
        <script src="../base/jquery.js"></script>
        
        <!-- Bootstrap headers required -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">        
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		
		
                
    </head>
    <!-- Javascript goes here -->
		<script>
		function validate()
		{
		var file1= document.getElementById('fileinput');
		var filename=file1.value;
		var file_extension = filename.split('.').pop();
		
		if(file_extension != 'txt')		
		{
		    alert("Please select file of type .txt");
			return false;
		}
		else
		{
		
           	 var filesize = parseFloat(file1.files[0].size / 1024).toFixed(2);

            	if(filesize >100)		
		{
		    alert("Your file size is " + filesize + "Please select file of size less than 100kb");
			return false;
		}
		else
		alert("File is OK for upload");
		return true;
        	} 
	
		
    		
		}
	
				
		</script>
    <body>
    
    	<!-- 
    		Page container in which all the page content is present
    			
    		Import components of Bootstrap, 
    			container: A box used to wrap all the data in a HTML page
    			row: A page-wide division which contains columns
    			col: columns used to divide row into 12 divisions
    		
    		Always follow below hierarchy to design proper webpages
    			container - can contain multiple rows 
    				row	- can contain multiple cols
    					col-xs-*    			
    	-->
        <div class="container">
        	
        	<!-- Class row indicates a new page wide divison -->
            <div class="row">
            
            	<!-- 
            		Class col-xs-12 indicates that this column consumes 12 divisions of the current row 
            		Each row can max contain 12 divisons
            		Class page-header is a helper class to make a page header  
            		-->
            	<div class="col-xs-12 page-header">
                	<span style="font-size:24px">WORD FREQUENCY COUNT</span>                		
                </div>
            </div>
        
        	<div class="row">
            	
            	<div class="col-xs-2">
                <!-- 
                	Example for leaving first 4 of 12 divisions of the current row blank 
                	Add content here to see how positioning using col-xs-<num> helps
                -->
                </div>
                
                <!-- Content that goes between so as to center your content -->
                <div class="col-xs-6">                	
                	
                	<form action="upload.php" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validate()">
						
						PLEASE UPLOAD YOUR FILE HERE(only .txt file upto 100kb size)<br><br>
						<input type="file" id="fileinput" name="fileinput" onchange="validate()" ><br>
						<input type="submit" value="Upload File" name="submit" class="btn btn-primary"  /> <br>
					</form>
					 
                </div>	
                
                <div class="col-xs-2">
                <!-- 
                	Example for leaving last 2 of 12 divisions of the current row blank 
                	Add content here to see how positioning using col-xs-<num> helps
               	-->
                </div>
                		
         	</div>
                        
       	</div>
        <!-- End of page container -->
                            
        
        
    </body>
</html>
