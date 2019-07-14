<?php
require_once 'connectDB.php';
$sql = "SELECT * FROM USERS WHERE USERNAME=?";
$pdo = new PDO($dsn, $user, $pass);

foreach ($_POST as $key => $val){
	
     // echo "$key= $val<br>";
	// echo "KEY:"."$key<br>";
	// echo "VAL:"."$val<br><br>";
	
}
$username= "'".$_POST['username']."'";
$question= "'".$_POST['question2']."'";
$answer= $_POST['answer'];
$youranswer= $_POST['youranswer'];

$sql = "INSERT INTO questionslog (username, question, answer, yourAnswer) VALUES
	($username,$question,$answer,$youranswer)";

try{
$stmt = $pdo->exec($sql);
// echo $stmt;
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
header('Location:game.php');
?>