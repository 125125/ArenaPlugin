	<div id="container">
		<div id="content">
			<?php
include("config/db_conf.php");
// Create connection
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['team'];

$sql = "SELECT * FROM arena_team WHERE arenaTeamId = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Team Name: " . $row['name'] . "<br>
				Rating: " . $row['rating'] . "<br>
				Rank: " . $row['rank'] . "<br>
				";
    }
} else {
    echo $id;
}

mysqli_close($conn);
?>
		</div>
	</div>