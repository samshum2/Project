<?php
session_start();
$_SESSION['User']=$_POST['Account'];

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"assignment");
$data=mysqli_query($link,"SELECT * from staff");

$Account = $_POST['Account'];
$pwd = $_POST['Pwd'];


function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>


<!DOCTYPE>
<html>
<head>
    <title>123</title>
</head>
<body>
    <?php
    $rs[1]="not null";
    for ($i=0;$rs[1]!="" && $i<100;$i=$i+1){
        $rs=mysqli_fetch_row($data);
        if ($rs[0]!=""){
            echo "$rs[1]";
            if ($rs[1]==$Account && $rs[5]==$pwd || $rs[3]==$Account && $rs[5]==$pwd){
                switch ($rs[2]) {
                    case 'RM':
                        echo "RM";
                        header('Location:RMindex.php');
                        break;
                    case 'WH':
                        echo "WH";
                        header('Location:WHindex.php');
                        break;
                    case 'CM':
                        echo "CM";
                        header('Location:CMindex.php');
                        break;
                    case 'AC':
                        echo "AC";
                        header('Location:ACindex.php');
                        break;
                    case 'PM':
                        echo "PM";
                        header('Location:PMindex.php');
                        break;
                    case 'SP':
                        echo "SP";
                        header('Location:SPindex.php');
                        break;
                }
            }
           
            echo "<br>";
        }
        else {
            alert("No this User or wrong password"); #header('Location:main.php')
        }
}




// funtion findRecordNo(){
//     print ("1");

// }




?>

</body>
</html>