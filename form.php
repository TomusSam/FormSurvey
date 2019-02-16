<?php 
	$Name = $_POST['name'];
	$Email = $_POST['mail'];
	$Age = $_POST['age'];
	$AI = $_POST['ai'];
	$interactRobot = $_POST['interact_robot'];
	$Advantages = $_POST['advantages'];
	$Suggestion = $_POST['suggestions'];
	echo $Name." ".$Email." ".$Age." ".$AI." ".$interactRobot." ".$Advantages." ".$Suggestion;
	
		$serverName = "localhost";
		$userName = "root";
		$password = "";
		$dbName = "admin";

		//Create connection
		$conn = new mysqli($serverName,$userName,$password,$dbName);

		//Check connection
		if($conn->connect_error){
			die("Connect failed!".$conn->connect_error);
		}

		//Prepare and bind statement
		$stmt = $conn->prepare("INSERT INTO `form` (`nume`, `email`, `varsta`, `Is artificial intelligence useful for creating robots?`, `How did you interact with a robot?`, `What are the advantages of artificial intelligence?`, `Any Comments or Suggestions?`) VALUES (?,?,?,?,?,?,?)");
		$stmt->bind_param("ssissss",$Name, $Email, $Age, $AI, $interactRobot, $Advantages, $Suggestion);
		$stmt->execute();

		mysqli_stmt_close($stmt);
		mysqli_close();
		header('location:newForm.php');
?>