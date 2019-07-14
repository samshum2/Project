<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="table-responsive">          
 <table class="table table-striped table-bordered">

	<tr>
		<!-- <th>qursetionID</th> -->
		<!-- <th>username</th> -->
		<th>No.</th>
		<th>Question</th>
		<th>Answer</th>
		<th>Your Answer</th>
	</tr>
<?php
require_once 'connectDB.php';
$pdo = new PDO($dsn, $user, $pass);

$username = $_COOKIE["UsernameCookie"];

$sql = "SELECT * FROM questionslog WHERE USERNAME='$username'";
$n=0;
$stmt = $pdo->query($sql);
	foreach ($stmt as $row) {
		$n++;
		echo "<tr>";
		//echo "<td>".$row['questionID']."</td>\n";
		//echo "<td>".$row['username']."</td>\n";
		echo "<td>$n</td>";
		echo "<td>".$row['question']."</td>\n";
		echo "<td>".$row['answer']."</td>\n";
		echo "<td>".$row['yourAnswer']."</td>\n";
		echo "</tr>";
	}
	echo "</table>";

?>

<form align="center">
	<button type='submit' class="btn btn-outline-success" formaction='game.php'>
	Return to Game Page</button>
	<button type='submit' class="btn btn-outline-primary" formaction='Login.php'>
	Return to Login Page</button>
</form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>