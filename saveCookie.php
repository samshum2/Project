<?php

setcookie("UsernameCookie",$_POST["Username"],time()+5000);
header('Location:main.php');

require_once 'connectDB.php';
$sql = "SELECT * FROM USERS WHERE USERNAME=?";
$pdo = new PDO($dsn, $user, $pass);
try {
    $username = $_POST['Username'];
    $stmt = $pdo->query("SELECT * FROM users where username ='$username'");
    if (checkUserName($username,$pdo)){
    	// 要改至是舊用戶就alert XXXXXXX
    	// $message = "Welcome $username";
    	// echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
    	//要改至是新用戶就alert XXXXXXX
        $sql="INSERT INTO users (username) VALUES ('$username')";
        $pdo->query($sql);
    }
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

function checkUserName($username,$pdo) {
    $stmt = $pdo->query("SELECT * FROM users where username ='$username'");
    foreach ($stmt as $row){
        return TRUE;
    }
    return FALSE;
}
?>