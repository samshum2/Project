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
<div class="col-md-12">

<h1><img src="img/ERP.png" width="180px">Map Request</h1>
<br>


<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"assignment");
$data=mysqli_query($link,"SELECT * from request where agreement != ''");




$NumOfData=mysqli_num_rows($data);



function testfun(){
   echo "Your test function on button click is working";
}


echo "<table border='1' class='table table-hover'>"; 
echo "<tr>"; 
echo "<th width='300'>Request ID</th>";
echo "<th width='300'>Purchaser ID</th>";
echo "<th width='300'>Item Name</th>";
echo "<th width='300'>Qty</th>";
echo "<th width='500'>Mapping Action</th>";

echo "</tr>";


	for ($i=0;$i<$NumOfData;$i++){
		$rs=mysqli_fetch_row($data);

		echo "<tr>";
		for ($j=0;$j<=3;$j++){
			echo "<td align='center'>".$rs[$j]."</td>";
		}

		echo "<td align='center'>
		$rs[5]
		</td>";


		echo "</tr>";
	}
	echo "</table>";




$NumOfData=mysqli_num_rows($data);
echo "There are $NumOfData Mapped<br>";


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
