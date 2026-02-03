<?php
// Connect to server and select database.
include("Config.php");
$datetime=date("y-m-d h:i:s"); //date time
$sql="INSERT INTO guestbook
(Name,Email,Comment,datetime)VALUES('".$_POST["name"]."','".$_POST["email"]
."' ,'".$_POST["comment"]."','$datetime')";
$objQuery = mysqli_query($objCon,$sql);
//check if query successful
if($objQuery){
echo "Successful";
echo "<BR>";
// link to view guestbook page
echo "<a href='viewguestbook.php'>View guestbook</a>";
}
else {
echo "ERROR";
}
?>