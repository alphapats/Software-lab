<?php


    $servername = "1.db.cse.iitb.ac.in";
    $username = "cs699user";
    $password = "cs699user@123";
    $dbname = "cs699db";
    // connect to the database
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
 

if(isset($_POST['action']))
{
if ($_POST['action'] == 'ADD')
{
if (isset($_POST['event_date']) && $_POST['event_date']!= null && $_POST['event_date']!= "" &&  isset($_POST['start_time']) && $_POST['start_time']!= null && $_POST['start_time']!= "" && isset($_POST['end_time']) && $_POST['end_time']!= null && $_POST['end_time']!= ""  && isset($_POST['Description']) && $_POST['Description']!= null && $_POST['Description']!= "" ) 
	//is_numeric($_GET['id']
{
 //

$event_date =  $_POST['event_date'];
list($y, $m, $d) = explode('-', $event_date);

if(preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $event_date))
{
if(checkdate($m, $d, $y)){
    //it's ok}
}
else{
echo "Wrong date .".$event_date." Enter valid date";
  echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
  	exit();

}
}
else{
echo "Wrong date format .".$event_date." Enter date in format YYYY-MM-DD";
  echo "<html> <form>";
    echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
    echo " </form> </html>";
    exit();
  }

$start_time =$_POST['start_time'];

if(preg_match("#([0-1]{1}[0-9]{1}|[2]{1}[0-3]{1}):[0-5]{1}[0-9]{1}:[0-5]{1}[0-9]{1}#", $start_time)){
    //it's ok(2[0-4]|[01][1-9]|10):([0-5][0-9])
}
else{
 
echo "Wrong time format/value for start time.".$start_time." Enter valid time in format HH:MM:SS";
  echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
  	exit();

}

$end_time =$_POST['end_time'];
if(preg_match("#([0-1]{1}[0-9]{1}|[2]{1}[0-3]{1}):[0-5]{1}[0-9]{1}:[0-5]{1}[0-9]{1}#", $end_time)){
    //it's ok(2[0-4]|[01][1-9]|10):([0-5][0-9])
}
else{
 
echo "Wrong time format/value for end time.".$end_time." Enter valid time in format HH:MM:SS";
  echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
  	exit();

}

$description =$_POST['Description'];


 // mysql inserting a new row
    $sql="INSERT INTO event(event_date, start_time , end_time , description) VALUES ('$event_date', '$start_time' , '$end_time' , '$description')"; 
    
       	$result = mysqli_query($db,$sql);

       	$last_id = mysqli_insert_id($db);
   	 if ($result) {
        // successfully inserted into database
        echo "Event successfully created.Event ID is :". $last_id;
        echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
 
    } else {
        // failed to insert row
       echo "Oops! An error occurred.";
       echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
 
    }
}else {
   
  echo "Required field(s) is missing";
  echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
 
}
}

if ($_POST['action'] == 'DELETE')
{
if (isset($_POST['event_id']) && is_numeric($_POST['event_id']) )
	//is_numeric($_GET['id']
{
 //

$event_id =  $_POST['event_id'];

 // mysql deleting
    $sql="DELETE FROM event WHERE event_id = '$event_id' "; 
    
    $result = mysqli_query($db,$sql);
 
   	 if ($result) {
        if (mysqli_affected_rows($db) > 0) {
        	echo "Event with Event ID ". $event_id. " is successfully deleted";
        	echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
        }
     else {
    echo "0 results.No such event with given event ID exists";
    echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
		}
 
    } else {
        
       echo "Oops! An error occurred.";
       echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
 
    }
}

else {
   
  echo "Required field(s) is missing";
  echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
 
}

}

if ($_POST['action'] == 'UPDATE')
{
if (isset($_POST['event_id']) && is_numeric($_POST['event_id']) )
{	//is_numeric($_GET['id']
$event_id =  $_POST['event_id'];
$update1=0;
$update2=0;
$update3=0;
$update4=0;
{
if(isset($_POST['event_date']) && $_POST['event_date']!= null && $_POST['event_date']!= "" )
{

$event_date =  $_POST['event_date'];
list($y, $m, $d) = explode('-', $event_date);

	//if(preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $event_date)){
if(preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $event_date))
{
if(checkdate($m, $d, $y)){
    //it's ok}
}
else{
echo "Wrong date .".$event_date." Enter valid date";
  echo "<html> <form>";
    echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
    echo " </form> </html>";
    exit();

}
}
else{
echo "Wrong date format .".$event_date." Enter date in format YYYY-MM-DD";
  echo "<html> <form>";
    echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
    echo " </form> </html>";
    exit();
  }

$sql="UPDATE event SET event_date='$event_date' WHERE event_id = '$event_id' "; 
$result = mysqli_query($db,$sql);
if (mysqli_affected_rows($db) > 0)
{
  $update1=1;
}
}

if(isset($_POST['start_time']) && $_POST['start_time']!= null && $_POST['start_time']!= "" )
{
$start_time=  $_POST['start_time'];
if(preg_match("#([0-1]{1}[0-9]{1}|[2]{1}[0-3]{1}):[0-5]{1}[0-9]{1}:[0-5]{1}[0-9]{1}#", $start_time)){
    //it's ok(2[0-4]|[01][1-9]|10):([0-5][0-9])
}
else{
 
echo "Wrong time format/value for start time.".$start_time." Enter valid time in format HH:MM:SS";
  echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
  	exit();

}
$sql="UPDATE event SET start_time='$start_time' WHERE event_id = '$event_id' "; 
$result2 = mysqli_query($db,$sql);
if (mysqli_affected_rows($db) > 0)
{
  $update2=1;
}
}

if(isset($_POST['end_time']) && $_POST['end_time']!= null && $_POST['end_time']!= "" )
{
$end_time=  $_POST['end_time'];

if(preg_match("#([0-1]{1}[0-9]{1}|[2]{1}[0-3]{1}):[0-5]{1}[0-9]{1}:[0-5]{1}[0-9]{1}#", $end_time)){
    //it's ok(2[0-4]|[01][1-9]|10):([0-5][0-9])("/(2[0-3]|[01][0-9]):([0-5][0-9])/", $foo)
}
else{
 
echo "Wrong time format/value for event end time.".$end_time." Enter time in format HH:MM:SS";
  echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
  	exit();

}
$sql="UPDATE event SET end_time='$end_time' WHERE event_id = '$event_id' "; 
$result3 = mysqli_query($db,$sql);
if (mysqli_affected_rows($db) > 0)
{
  $update3=1;
}
}

if(isset($_POST['Description']) && $_POST['Description']!= null && $_POST['Description']!= ""  )
{
$description =$_POST['Description'];
$sql="UPDATE event SET description='$description' WHERE event_id = '$event_id' "; 
$result4 = mysqli_query($db,$sql);
if (mysqli_affected_rows($db) > 0)
{
  $update4=1;
}
}

if ($update1 || $update2||$update3 ||$update4) {
        	echo "Event with Event ID ". $event_id. " is successfully updated";
        	echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
        }
     else {
    echo "0 results.No field updated. Either no such event with given event ID exists or no data was given for updation";
    echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
		}
}
}
else
{
	echo "Required field (Event ID) is missing";
	echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
}

}


if ($_POST['action'] == 'VIEW1')
{

	if(isset($_POST['event_date']) && $_POST['event_date']!= null && $_POST['event_date']!= "" )
{

$event_date =  $_POST['event_date'];

list($y, $m, $d) = explode('-', $event_date);

 if(preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $event_date))
{
if(checkdate($m, $d, $y)){
    //it's ok}
}
else{
echo "Wrong date .".$event_date." Enter valid date";
  echo "<html> <form>";
    echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
    echo " </form> </html>";
    exit();

}
}
else{
echo "Wrong date format .".$event_date." Enter date in format YYYY-MM-DD";
  echo "<html> <form>";
    echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
    echo " </form> </html>";
    exit();
  }
 
   	$sql="SELECT * from event WHERE event_date = '$event_date' "; 
   	$result = mysqli_query($db,$sql);

   	if (mysqli_num_rows($result) > 0) {
    // output data of each row
   	echo "<table id=t01 align = 'center' border='1'  bgcolor ='Lightgreen'>";
    echo "<tr>";
     echo "<th>EVENT ID</th><th>EVENT DATE</th> <th>START TIME</th><th>END TIME</th><th>DESCRIPTION</th>";
     echo "</tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr> <td> " . $row["event_id"]."</td><td> " . $row["event_date"]. "</td><td>" . $row["start_time"]. "</td><td>" . $row["end_time"]."</td><td>". $row["description"]. "</td></tr>";
    }

    echo "</table>";
    echo "<html> <form>";
    echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
    echo " </form> </html>";
} else {
    echo "0 results.No event scheduled for that day";
    echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
}
}
else
{
	echo "Required field (Event ID) is missing";
	echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
}
}


if ($_POST['action'] == 'VIEWALL')
{
     
   	$sql="SELECT * from event "; 
   	$result = mysqli_query($db,$sql);

   	if (mysqli_num_rows($result) > 0) {
    // output data of each row
   	echo "<table id=t01 align = 'center' border='1' bgcolor='Lightgreen' >";
    echo "<tr>";
     echo "<th>EVENT ID</th><th>EVENT DATE</th> <th>START TIME</th><th>END TIME</th><th>DESCRIPTION</th>";
     echo "</tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr> <td> " . $row["event_id"]."</td><td> " . $row["event_date"]. "</td><td>" . $row["start_time"]. "</td><td>" . $row["end_time"]."</td><td>". $row["description"]. "</td></tr>";
    }

    echo "</table>";
    echo "<html> <form>";
    echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
    echo " </form> </html>";
} else {
    echo "0 results";
    echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
}
}


}
mysqli_close($db);
//$url = $_GET['url'];


?>
