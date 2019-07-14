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

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"assignment");
$data=mysqli_query($link,"SELECT * from item");

$ItemID = $_POST['ItemID'];
$ItemName = $_POST['ItemName'];
$VirtualID = $_POST['VirtualID'];
$Sub_CategoryID = $_POST['Sub_CategoryID'];


$NumOfData=mysqli_num_rows($data);
echo "<h1><img src='img/ERP.png' width='100px'>Search Result</h1>";

// echo "$ItemID";
// echo "<br>";
// echo "$ItemName";
// echo "<br>";
// echo "$VirtualID";
// echo "<br>";
// echo "$Sub_CategoryID";
// echo "<br>";

	echo "<table border='1'>"; 
	echo "<tr>"; 
	echo "<th>Item ID</th>";
	echo "<th>Item Name</th>";
	echo "<th>Description</th>";
	echo "<th>Virtual ID</th>";
	echo "<th>Sub Category ID</th>";
	echo '</tr>';
	for ($i=0;$i<$NumOfData;$i++){
		$rs=mysqli_fetch_row($data);
		for ($j=0;$j<=4;$j++){
			echo "<td align='center'>".$rs[$j]."</td>";
		}
		// $rs=mysqli_fetch_row($data);
		// print_r($rs);
		// echo '<br>';
		echo "</tr>"; 
	}
	echo "</table>";
	 // $rs=mysqli_fetch_row($data);
	 // print (gettype($rs));
	 // echo '<br>';
	 // print_r($rs);
	 // echo '<br>';
	 // $rs=mysqli_fetch_row($data);
	 // print_r($rs);
	 // echo '<br>';
	 // $rs=mysqli_fetch_row($data);
	 // print_r($rs);
	 // echo '<br>';
	 // echo 'Num of row:<br>';
	 // echo $NumOfData;

?>



</body>
</html>