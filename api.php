<?php
//connect to db
$database = "shuleapi";
$user = "root";
$password = "";
$host = "localhost";

mysql_connect($host,$user,$password);
mysql_select_db($database) or die (mysql_error());


//call the passed in function_exists
	if(function_exists($_GET['method'])){
		$_GET['method']();
	}


//methods
function getAllSchools(){
	$school_sql = mysql_query("select s.name as name, w.name as ward from school s, ward w where s.ward_id=w.id limit 200,260");
	$schools=array();
	while($school=mysql_fetch_array($school_sql)){
		$schools[]=$school;
	}
	$schools=json_encode($schools);
	echo $_GET['jsoncallback'].'('.$schools.')';
}


function getAllRegions(){
	$regions_sql = mysql_query("select * from region");
	$regions=array();
	while($region=mysql_fetch_array($regions_sql)){
		$regions[]=$region;
	}
	$regions=json_encode($regions);
	echo $_GET['jsoncallback'].'('.$regions.')';
}

?>