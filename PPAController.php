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


echo "$DBrecord<br>";
echo "$agreement<br>";


$sql = "UPDATE request SET agreement=\"$agreement\" WHERE RequestNo=\"$DBrecord\"";

echo "$sql";

mysqli_query($link, $sql)

?>


<!DOCTYPE>
<html>
<head>
    <title>123</title>
</head>
<body>
<?php
?>

</body>
</html>