	<div id="container">
		<div id="head">
			<div id="form">
				<center>
				<form action="#" method="POST">
					<input type="search" name="itemname" id="searchbar" placeholder="Search Arena Team" class="first"><br>
					<label for="two">2v2</label>
					<input type="radio" name="type" id="two" class="type" value="2">
					<label for="three">3v3</label>
					<input type="radio" name="type" id="three" class="type" value="3">
					<label for="five">5v5</label>
					<input type="radio" name="type" id="five" class="type" value="5">
				</form>
				</center>
			</div>
		</div>
		<hr>
		<div id="content">
			<table id="searchResult">
				<tr class="tablerow">
					<th>Team Name</th>
					<th>Team Rating</th>
					<th>Team Rank</th>
				</tr>
			</table>
			<script type="text/javascript" src="js/SearchTeam.js"></script>
		</div>
	</div>