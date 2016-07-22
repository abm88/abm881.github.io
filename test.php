<?php 
	$connect = mysql_connect("localhot", "root", "");
	$db = mysql_select_db("opacks", $connect);
	$number = count($_POST["name"]);
	if ($number>1) {
		for($i=0; $i<$number; $i++){
			if(trim($_POST["name"][$i]) != ''){
				$sql="INSERT INTO employee(name) values ('".mysql_real_escape_string($connect, $_POST["name"][$i])."')";
				mysql_query($connect, $sql);

			}
		}
		echo "Data Inserted "; }
		else {
			Echo " enter name";
		}
 ?>