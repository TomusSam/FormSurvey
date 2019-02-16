<html>
<head>
	<a href="https://fonts.googleapis.com/css?family=Raleway:400,500);">
	</a>
	<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Raleway:400,500);
html{
    height: 100%;
    padding-bottom: 380px;
    background-attachment: fixed;
    background-image: url(https://media.freestocktextures.com/cache/ee/a7/eea7053352caf594e5ab1a7c3667e75d.jpg);
}
h1{
	text-align: center;
	font-size: 40px;
    color: white;
}

#form{
	background: transparent;
	width: 55%;
	max-width: 900px;
}
table{
	font-size: .8em;
	padding-bottom: 10px;
}
table th{
	background: #800000;
	color: #fff;
	font-weight: 200;
	font-style: italic;
	padding: 0px 5px;
}
table tr td{
	border: 1px solid #d2a679;
	padding: 0px 5px;
}
table tr:nth-child(even){
	background: #c68c53;
}
table tr:hover{
	background: #d2a679;
}
table tr td:hover{
	background: #cc9966;
}
</style>
</head>
	<h1 id="title">Thanks for your time!</h1>
<div class="form">
<p id="description">Your Answers!</p>
<form id="survey-form">
	<?php
		$serverName = "localhost";
		$userName = "root";
		$password = "";
		$dbName = "admin";

		//Create connection
		$conn = new mysqli($serverName,$userName,$password,$dbName);
		//Check connection
		if($conn->connect_error){
			die("Connect failed".$conn->connect_error);
	    }
		$query = mysqli_query($conn, "SELECT *FROM form");
	?>
	<table id="form">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Age</th>
			<th>AI ==> robots</th>
			<th>Interact robot</th>
			<th>Advantages AI</th>
			<th>Comments</th>
		</tr>
	<?php
		while ($row = mysqli_fetch_array($query)) {
			echo "<tr>";
				echo "<td>".$row['ID']."</td>";
				echo "<td>".$row['nume']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "<td style='text-align: center;'>".$row['varsta']."</td>";
				echo "<td style='text-align: center;'>".$row['Is artificial intelligence useful for creating robots?']."</td>";
				echo "<td style='text-align: center;'>".$row['How did you interact with a robot?']."</td>";
				echo "<td style='text-align: center;'>".$row['What are the advantages of artificial intelligence?']."</td>";
				echo "<td style='text-align: center;'>".$row['Any Comments or Suggestions?']."</td>";
			echo "</tr>";
			}
			mysqli_close($conn);
	?>
	</table>
	</form>
</div>
</html>

<?php

echo file_get_contents("./FormSurvey.html");
