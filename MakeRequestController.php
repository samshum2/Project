<?php session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>SearchItem</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-8">	
<?php

$Item = $_POST['MakeRequest'];
$Qty = $_POST['Qty'];
$User = $_SESSION['User'];

$link=mysqli_connect("localhost","root","","assignment");
$sql = "INSERT INTO REQUEST (User,ITEM,QTY)
VALUES (\"$User\",\"$Item\",\"$Qty\")";
	
mysqli_query($link,$sql);

echo "<h1><img src='img/ERP.png' width='100px'>Make Request</h1>";


echo "$Item<br>";
echo "$Qty<br>";
echo "Done!";
echo "System will redirect to last page in 3 sec.";



header( "refresh:3;url=makeRequest.php" );

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<button type=\"button\" class=\"btn btn-info\" name=\"Reset\" value=\"Reset\" id=\"reset_form\" onclick=\"location='MakeRequest.php'\">Back Now!</button>";
echo "<button type=\"button\" class=\"btn btn-warning\" onclick='location=\"Login2.php\"'>Logout</button>";

?>



</body>
</html>