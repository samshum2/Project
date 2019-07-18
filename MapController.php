<!DOCTYPE>
<html>
<head>
    <title>Map Request</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h1><img src="img/ERP.png" width="180px">Map Request</h1>
<br>
<?php
session_start();

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"assignment");
$data=mysqli_query($link,"SELECT * from request");
$NumOfData=mysqli_num_rows($data);

$val=$_POST['letter'];
$newVal = explode("+", $val);
$DBrecord = $newVal[0];
$agreement = $newVal[1];
$amount = $newVal[2];
$item = $newVal[3];



$sql = "UPDATE request SET agreement=\"$agreement\", State=1 WHERE RequestNo=\"$DBrecord\"";

#UPDATE request SET agreement="PPA", State="1" WHERE RequestNo=55

if ($agreement=="PPA"){
	$dataPPA=mysqli_query($link,"SELECT QTY from pparemaining WHERE ITEM=\"$item\"");
	$PPA_QTY=mysqli_fetch_row($dataPPA)[0];
	echo "Agreement Type=".$agreement."<br>";
	echo "PPA Remain QTY=".$PPA_QTY."<br>";
	echo 'Amount='.$amount.'<br>';
	if ($PPA_QTY<$amount){
		echo "<i style='color:red;font-size:30px;'>Sorry! The Agreement QTY can not cover the request<br>";
		echo "System turn Back after 5 Sec!<br></i>";
		header( "refresh:5;url=MapRequest.php" );
		exit;
	}
	$remaining = $PPA_QTY-$amount;
	echo "Remain:".$remaining."<br>";
	$sql_update = "UPDATE pparemaining SET QTY=\"$remaining\" WHERE ITEM=\"$item\"";
	mysqli_query($link, $sql);
	mysqli_query($link, $sql_update);
} else if($agreement=="BPA"){
	$dataBPA=mysqli_query($link,"SELECT QTY from bparemaining WHERE ITEM=\"$item\"");
	$BPA_QTY=mysqli_fetch_row($dataBPA)[0];
	echo "Agreement Type=".$agreement."<br>";
	echo "BPA Remain QTY=".$BPA_QTY."<br>";
	echo 'Amount='.$amount.'<br>';
	if ($BPA_QTY<$amount){
		echo "<i style='color:red;font-size:30px;'>Sorry! The Agreement QTY can not cover the request<br>";
		echo "System turn Back after 5 Sec!<br></i>";
		header( "refresh:5;url=MapRequest.php" );
		exit;
	}
	$remaining = $BPA_QTY-$amount;
	echo "Remain:".$remaining."<br>";
	$sql_update = "UPDATE bparemaining SET QTY=\"$remaining\" WHERE ITEM=\"$item\"";
	mysqli_query($link, $sql);
	mysqli_query($link, $sql_update);
} else {
	$dataWH=mysqli_query($link,"SELECT QTY from bparemaining WHERE ITEM=\"$item\"");
	$WH_QTY=mysqli_fetch_row($dataWH)[0];
	echo "Agreement Type=".$agreement."<br>";
	echo "WH Remain QTY=".$WH_QTY."<br>";
	echo 'Amount='.$amount.'<br>';
	if ($WH_QTY<$amount){
		echo "<i style='color:red;font-size:30px;'>Sorry! The Agreement QTY can not cover the request<br>";
		echo "System turn Back after 5 Sec!<br></i>";
		header( "refresh:5;url=MapRequest.php" );
		exit;
	}
	$remaining = $WH_QTY-$amount;
	echo "Remain:".$remaining."<br>";
	$sql_update = "UPDATE whqty SET QTY=\"$remaining\" WHERE ITEM=\"$item\"";
	mysqli_query($link, $sql);
	mysqli_query($link, $sql_update);
}


echo "<br>Mapped!";
echo "<br>";
echo "System will redirect to last page in 5 sec.";
echo "<br>";
echo "<br>";

header( "refresh:5;url=MapRequest.php" );
echo "<button type=\"button\" class=\"btn btn-info\" name=\"Reset\" value=\"Reset\" id=\"reset_form\" onclick=\"location='MapRequest.php'\">Back Now!</button> ";
echo "<button type=\"button\" class=\"btn btn-warning\" onclick='location=\"Login2.php\"'>Logout</button>";
?>

</div>
</div>
</div>
</body>
</html>