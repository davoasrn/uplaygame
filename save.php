<?php 
require("blocks/baza.php");
if(!isset($mapId)) {$mapId = 1;}
$userid = $_POST['userId'];
$savedData = $_POST['savedData'];

//mysql_query("Select * FROM plans WHERE id=$mapId");
$zapros = mysql_query("UPDATE plans SET map_elements='$savedData' WHERE id=$mapId");
if($zapros == true){
$statmessage = "It works";
}
else {$statmessage = "Error";}
echo $statmessage;
?>