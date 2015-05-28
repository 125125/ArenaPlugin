<?php
include("config/db_conf.php");

$page = $_GET['team'];
if($page=="") {
	@include("pages/arenateam.php");
}

$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM arena_team";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['arenaTeamId'];
		switch($page) {
			case$id:
			@include("pages/teaminfo.php");
			break;
		}
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>