<?php session_start();
// $User = $_SESSION['User'];
// echo "$User";
?>
<!DOCTYPE>
<html>
<head>
	<title>MapRequest</title>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<div class="container">
<div class="row">
<div class="col-md-8">

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


echo "<table border='1'>"; 
echo "<tr>"; 
echo "<th height='40' align='center' >Request ID</th>";
echo "<th height='40' align='center'>Purchaser ID</th>";
echo "<th height='40' align='center'>Item Name</th>";
echo "<th height='40' width='100'>Qty</th>";
echo "<th height='40' align='center'>Mapping Action</th>";
echo "</tr>";


	for ($i=0;$i<$NumOfData;$i++){
		$rs=mysqli_fetch_row($data);
		echo "<tr>";
		for ($j=0;$j<=3;$j++){
			echo "<td align='center'>".$rs[$j]."</td>";
		}

		echo "<td align='center'>

		<form name='myLetters' action='PPAController.php' method='POST' required>
		<input type='radio' name='letter' value=\"$rs[0]+PPA\" /> PPA
		<input type='radio' name='letter' value=\"$rs[0]+BPA\" /> BPA
		<input type='radio' name='letter' value=\"$rs[0]+WH\" /> WH
		<input type='submit' class='btn btn-success' name='submit' value='Submit' />
		</form>

		</td>";
		echo "</tr>";
	}
	echo "</table>";




$NumOfData=mysqli_num_rows($data);
echo "There are $NumOfData Request have not been Map!<br>";


?>



<form name="myLetters" action="PMindex.php" method="POST">
<input type="submit" name="submit" value="Back" class='btn btn-primary' />
</form>



<div class="response_msg"></div>
</div>
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</body>
</html>
