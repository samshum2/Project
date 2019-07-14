<?php
$Op=rand(1,4);
//+
if ($Op==1){
header('Content-Type:Application/json');
$operand1 = rand(1,99);
$operand2 = rand(1,99);
$operator = "+";
$question = "$operand1 $operator $operand2";
$answer = $operand1 + $operand2;
$result = array("question" => $question, "answer" => $answer);
echo json_encode($result);
}

//-
if ($Op==2){
header('Content-Type:Application/json');
$operand1 = rand(1,98);//Small
$operand2 = rand($operand1,99);//Big
$operator = "-";
$question = "$operand2 $operator $operand1";
$answer = $operand2 - $operand1;
$result = array("question" => $question, "answer" => $answer);
echo json_encode($result);
}

//X
if ($Op==3){
header('Content-Type:Application/json');
$operand1 = rand(1,99);
$operand2 = rand(1,99);
$operator = "X";
$question = "$operand1 $operator $operand2";
$answer = $operand1 * $operand2;
$result = array("question" => $question, "answer" => $answer);
echo json_encode($result);
}

///
if ($Op==4){
header('Content-Type:Application/json');
$operand1 = rand(2,10);
$operand2 = rand(1,10);
$TMPanswer = $operand1 * $operand2;
$operator = "/";
$question = "$TMPanswer $operator $operand1";
$answer = $operand2;
$result = array("question" => $question, "answer" => $answer);
echo json_encode($result);
}

?>