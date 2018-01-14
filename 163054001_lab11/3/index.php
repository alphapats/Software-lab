<!DOCTYPE HTML>
<html>
	<head>
  <style>
    .required:after { content:" *"; color: red;}
</style>

    	<!-- Change author to your name -->
    	<meta name="Amit Pathania" />
        
        <!-- Title of Page -->
        <title>
       		Homepage || EVENT MANAGEMENT
        </title>
        
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">        
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<style>
			a{
				color: inherit;
			}
			a:hover{
				color: inherit;
			}
		</style>
		<div class="row">
            	<div class="col-xs-12 jumbotron well well-lg">
                	<strong> EVENT SCHEDULER : MANAGE YOUR TIME </strong>
                	
                	
                </div>
            </div>
        
		<script>
			<!-- Javascript goes here -->

			function add()
			{

	var new_form = '<form name="add" action="process.php" method="post"> <h3> Enter new event details :</h3><br>';
		
	new_form= new_form + ' <input type="hidden" name="action" value="ADD" />	';	 
	new_form= new_form + ' <div class="required"> event_date(YYYY-MM-DD): <input required type="date" value="<?php echo date('Y-m-d'); ?>" Id="event_date" name="event_date"> </div><br>' ;
	new_form= new_form + '<div class="required"> start_time (HH:MM:SS): <input required type="time" value="<?php echo date("H:i:s"); ?>" Id="starttime" name="start_time" > </div> <br> ' ;
	new_form= new_form + ' <div class="required"> end_time(HH:MM:SS): <input required type="time" value="<?php echo date("H:i:s"); ?>" Id="end_time" name="end_time"> </div><br> ' ;
	new_form= new_form + '<div class="required"> Description: <input required type="text" Id="Description" name="Description"></div> <br>' ;
	new_form= new_form + '<input type="submit" value="SUBMIT" name="ADD" id="ADD" >';
	new_form=new_form+'</form>'
   new_form=new_form+'<br><p>*mandatory fields</p>'
	document.getElementById("addarea").innerHTML = new_form;
			}


function del()
			{

	var new_form = '<form name="del" action="process.php" method="post"> <h3> Enter event to be deleted:</h3><br>';
		
	new_form= new_form + ' <input type="hidden" name="action" value="DELETE" />	';			 
	new_form= new_form + '<div class="required"> Event_id: <input type="text" required Id="Event_id" name="event_id" ></div><br>' ;
	new_form= new_form + '<input type="submit" value="SUBMIT" name="DELETE" id="DELETE">';
	new_form=new_form+'</form>'
   new_form=new_form+'<br><p>*mandatory fields</p>'
	document.getElementById("addarea").innerHTML = new_form;
			}



function update()
			{

	var new_form = '<form name="update" action="process.php" method="post"> <h3> Enter event details to be updated:</h3><br>';
		
	new_form= new_form + ' <input type="hidden" name="action" value="UPDATE" />	';			 
	new_form= new_form + '<div class="required"> Event_id: <input required type="text" Id="Event_id"  name="event_id"> </div><br>' ;
	new_form= new_form + ' event_date(YYYY-MM-DD): <input type="text" Id="event_date"  name="event_date"> <br>' ;
	new_form= new_form + ' start_time(HH:MM:SS) : <input type="text" Id="start_time"  name="start_time"> <br>' ;
	new_form= new_form + ' end_time (HH:MM:SS):<input type="text" Id="end_time"  name="end_time"> <br>' ;
	new_form= new_form + ' Description: <input type="text" Id="Description" name="Description"> <br>' ;
	new_form= new_form + '<input type="submit" value="SUBMIT" name="UPDATE" id="UPDATE">';
	new_form=new_form+'</form>'
    new_form=new_form+'<br><p>*mandatory fields</p>'
	document.getElementById("addarea").innerHTML = new_form;
			}	



function display()
			{

	var new_form = '<form name="display" action="process.php" method="post"> <h3> Enter event date :</h3><br>';
		
	new_form= new_form + ' <input type="hidden" name="action" value="VIEW1" />	';			 
	new_form= new_form + ' <div class="required"> Event_date(YYYY-MM-DD): <input required type="text" Id="event_date" name="event_date"> </div><br>' ;
	new_form= new_form + '<input type="submit" value="SUBMIT" name="VIEW1" id="VIEW1">';
	new_form=new_form+'</form>'
   new_form=new_form+'<br><p>*mandatory fields</p>'
   
	document.getElementById("addarea").innerHTML = new_form;
			}					


		</script>
		        
    </head>



    <body>
     
            
            	<div class="col-xs-12 page-header">
                	<span style="font-size:24px">  Please Choose the option    </span>                		
                </div>
           
 <div class="col-xs-6 ">       	
    <form>       
<br> <input type="button" value="ADD EVENT" name="ADDb" id="ADDB" onclick="add()"> <br> </form>
<br> <input type="button" value="DELETE EVENT" name="DELB" id="DELB" onclick="del()"> <br>
<br> <input type="button" value="UPDATE EVENT" name="UPDATEB" id="UPDATEB" onclick="update()"> <br>

<br> <input type="button" value="VIEW EVENTS ON DESIRED DATE" name="VIEW1" id="VIEW1" onclick="display()"> <br>
<form   action="process.php" method="post"> 
<input type="hidden" name="action" value="VIEWALL" />	
<br> <input type="submit" value="VIEW ALL EVENTS" name="VIEWALL" id="VIEWALL" > <br>
 </form>
</div>
            <div class="col-xs-6" id="addarea">            	
            		           		
               	</div> 
             </div>
            </body>

</html>

<?php
	


?>
