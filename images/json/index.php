<?php
header('Content-Type: application/json');
include ('baza.php');
$icons = array();
$zapros = mysql_query("SELECT * FROM icons");
if(mysql_num_rows($zapros)!=0) {
	$icon_data = array();
	$result = mysql_fetch_array($zapros);
	do {
		$icon_data['id'] = $result['id'];
		$icon_data['name'] = $result['name'];
		$icon_data['tab_category'] = $result['category_id'];
		$icon_data['position'] = $result['position'];
		$icon_data['size'] = $result['size'];
		$icon_data['added_by_user'] = $result['user_id'];
		$icon_data['status'] = $result['status'];
		$icon_data['url'] = 'http://id.am/uplanit/images/icons/'.$result['id'].'.png';
		array_push($icons,$icon_data);
		}
	while($result = mysql_fetch_array($zapros));
	
	}
 $output = json_encode($icons);

 echo $output;
?>