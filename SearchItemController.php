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
$Description = $_POST['Description'];
$VirtualID = $_POST['VirtualID'];
$Category_Type = $_POST['Category_Type'];


$NumOfData=mysqli_num_rows($data);
echo "<h1><img src='img/ERP.png' width='100px'>Search Result</h1>";
$count = 0;

if ($ItemID==""){
	$ItemID=',';
}
if ($ItemName==""){
	$ItemName=',';
}
if ($Description==""){
	$Description=',';
}
if ($VirtualID==""){
	$VirtualID=',';
}
if ($Category_Type==""){
	$Category_Type=',';
}

	echo "<table border='1' class='table table-hover'>"; 
	echo "<tr>"; 
	echo "<th>Item ID</th>";
	echo "<th>Item Name</th>";
	echo "<th>Description</th>";
	echo "<th>Virtual ID</th>";
	echo "<th>Sub Category ID</th>";
	echo '</tr>';


	for ($i=0;$i<$NumOfData;$i++){
		$rs=mysqli_fetch_row($data);
		$checkItemId = strpos($rs[0],$ItemID);
		$checkItemName = strpos($rs[1],$ItemName);
		$checkDescription = strpos($rs[2],$Description);
		$checkVirtualID = strpos($rs[3],$VirtualID);
		$checkSub_Category_Type = strpos($rs[4],$Category_Type);

		if ($checkItemId!==false){
			$checkItemId=true;
		}
		if ($checkItemName!==false){
			$checkItemName=true;
		}
		if ($checkDescription!==false){
			$checkDescription=true;
		}
		if ($checkVirtualID!==false){
			$checkVirtualID=true;
		}
		if ($checkSub_Category_Type!==false){
			$checkSub_Category_Type=true;
		}

		if ($checkItemId || $checkItemName || $checkDescription || $checkVirtualID || $checkSub_Category_Type){
			$count++;
			for ($j=0;$j<=4;$j++){
				echo "<td align='center'>".$rs[$j]."</td>";
			}
		echo "</tr>"; 
		}
	}
	echo "</table>";
	echo "There ".$count." Records";
	echo "<br>";
	echo "<button type=\"button\" class=\"btn btn-primary\" onclick='location=\"SearchItem.php\"'>Back</button> ";
	echo "<button type=\"button\" class=\"btn btn-warning\" onclick='location=\"Login2.php\"'>Logout</button>";

?>



</body>
</html>