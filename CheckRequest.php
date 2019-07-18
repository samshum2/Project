<?php session_start();
// $User = $_SESSION['User'];
// echo "$User";
?>
<!DOCTYPE>
<html>
<head>
	<title>CheckRequest</title>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<div class="container">
<div class="row">
<div class="col-md-8">

<h1><img src="img/ERP.png" width="180px">Check Request</h1>
<br>
<form name="RequestForm" id="contact-form">

<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"assignment");
$User = $_SESSION['User'];
$data=mysqli_query($link,"SELECT * from request where User=$User");
$NumOfData=mysqli_num_rows($data);
$User = $_SESSION['User'];
$Count = 0;


function testfun(){
   echo "Your test function on button click is working";
}




echo "<table border='1' class='table table-hover'>"; 
echo "<tr>"; 
echo "<th height='40' align='center' >Request ID</th>";
// echo "<th height='40' align='center'>Purchaser ID</th>";
echo "<th align='center'>Item Name</th>";
echo "<th align='center' width='100'>Qty</th>";
echo "<th align='center'>State</th>";
// echo "<th align='center'>WH Qty</th>";
echo "</tr>";

$count = $NumOfData;
	for ($i=0;$i<$NumOfData;$i++){
		$rs=mysqli_fetch_row($data);
		echo "<tr>";
		echo "<td align='center'>$rs[0]</td>";
		echo "<td align='center'>$rs[2]</td>";
		echo "<td align='center'>$rs[3]</td>";
		$state="Non Mapped";
		if ($rs[4] == 1){
			$state = 'Mapped';
			$count--;
		}
		echo "<td align='center'>$state</td>";
	}
		echo "</tr>";
		echo "</table>";
// $NumOfData=mysqli_num_rows($data);
echo "You $count Request have not been Map<br>";


?>






<button type="button" onclick="history.back()" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Back</button>
<button type="button" class="btn btn-warning" onclick='location="Login2.php"'>Logout</button>
</form>
<div class="response_msg"></div>
</div>
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</body>
</html>