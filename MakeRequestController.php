<?php session_start();
// $User = $_SESSION['User'];
// echo "$User";
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
// mysqli_select_db($link,"assignment");
// $data=mysqli_query($link,"SELECT * from item");
// $NumOfData=mysqli_num_rows($data);
$sql = "INSERT INTO REQUEST (User,ITEM,QTY)
VALUES (\"$User\",\"$Item\",\"$Qty\")";
	
mysqli_query($link,$sql);

echo "<h1><img src='img/ERP.png' width='100px'>Make Request</h1>";


echo "$Item<br>";
echo "$Qty<br>";
echo "Done!"
?>



</body>
</html>