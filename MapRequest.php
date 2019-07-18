<?php session_start();
?>
<!DOCTYPE>
<html>
<head>
	<title>MapRequest</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<div class="container">
<div class="row">
<div class="col-md-12">

<h1><img src="img/ERP.png" width="180px">Map Request</h1>
<br>

<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"assignment");
$data=mysqli_query($link,"SELECT * from request where agreement = ''");
$NumOfData=mysqli_num_rows($data);

function testfun(){
   echo "Your test function on button click is working";
}


echo "<table border='1' class='table table-hover'>"; 
echo "<tr>"; 
echo "<th width='200'>Request ID</th>";
echo "<th width='200'>Purchaser ID</th>";
echo "<th width='300'>Item Name</th>";
echo "<th width='200'>Qty</th>";
echo "<th width='800'>Mapping Action</th>";
echo "<th width='300'>WH Qty</th>";
echo "<th width='300'>PPA Remaining</th>";
echo "<th width='300'>BPA Remaining</th>";
echo "</tr>";


	for ($i=0;$i<$NumOfData;$i++){
		$rs=mysqli_fetch_row($data);

		echo "<tr>";
		for ($j=0;$j<=3;$j++){
			echo "<td align='center'>".$rs[$j]."</td>";
		}

		echo "<td align='center'>

		<form name='myLetters' action='MapController.php' method='POST' required>
		<input type='radio' name='letter' value=\"$rs[0]+PPA+$rs[3]+$rs[2]\" /> PPA
		<input type='radio' name='letter' value=\"$rs[0]+BPA+$rs[3]+$rs[2]\" /> BPA
		<input type='radio' name='letter' value=\"$rs[0]+WH+$rs[3]+$rs[2]\" /> WH
		<input type='submit' class='btn btn-success' name='submit' value='Submit' />
		</form>
		</td>";
		$WH=mysqli_query($link,"SELECT QTY from whqty where ITEM = \"$rs[2]\"");
		$WH_QTY=mysqli_fetch_row($WH);
		echo "<td align='center'>
		$WH_QTY[0]
		</td>";
		$PPA=mysqli_query($link,"SELECT QTY from pparemaining where ITEM = \"$rs[2]\"");
		$PPA_QTY=mysqli_fetch_row($PPA);
		echo "<td align='center'>
		$PPA_QTY[0]
		</td>";
		$BPA=mysqli_query($link,"SELECT QTY from bparemaining where ITEM = \"$rs[2]\"");
		$BPA_QTY=mysqli_fetch_row($BPA);
		echo "<td align='center'>
		$BPA_QTY[0]
		</td>";
		echo "</tr>";

	}
	echo "</table>";




$NumOfData=mysqli_num_rows($data);
echo "There are $NumOfData Request have not been Mapped!<br>";


?>



<form name="myLetters" action="PMindex.php" method="POST">
<input type="submit" name="submit" value="Back" class='btn btn-primary' />
<button type="button" class="btn btn-warning" onclick='location="Login2.php"'>Logout</button>
</form>
<div class="response_msg"></div>
</div>
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</body>
</html>
