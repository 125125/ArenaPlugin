<?php
include("../config/db_conf.php");
mysql_connect($host, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
 
// Get all the data from the "example" table
$escaped_string = mysql_real_escape_string($_GET['name']);
If ($escaped_string == '') { exit; }
$type = $_GET['type'];
$result = mysql_query("SELECT * FROM arena_team WHERE `name` LIKE '%$escaped_string%' AND `type`='$type' LIMIT 200")
or die(mysql_error());  

$rows = array();
while($row = mysql_fetch_assoc($result)) {
        $rows[] = array('id' => $row['arenaTeamId'], 'name' => $row['name'], 'rating' => $row['rating'], 'rank' => $row['rank']);
}


header('Content-Type: application/json');
echo json_encode($rows);