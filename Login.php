<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript">
function resetForm(Form)
   {
       var myForm = document.getElementById(Form);

       for (var i = 0; i < myForm.elements.length; i++)
       {
           if ('submit' != myForm.elements[i].type && 'reset' != myForm.elements[i].type)
           {
               myForm.elements[i].checked = false;
               myForm.elements[i].value = '';
               myForm.elements[i].selectedIndex = 0;
           }
       }
   }
</script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #ffffff;}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 3px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 5px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button {
  opacity: 0.8;
}


.cancelbtn {
 /* margin: 3px 0 10px 0;*/
  /*box-sizing: border-box;*/
  border: 3px solid #ffffff;
  width: 59%;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.Login {
  width: 23%;
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
}
</style>
</head>
<body>

<!-- <h2>Welcome to Primary Online Mathematics Exercise System</h2> -->

<?php

if(isset($_COOKIE["UsernameCookie"])){
  $username=$_COOKIE["UsernameCookie"];
} else {
  $username="";
}
  echo "<form method='post' action='saveCookie.php' id='Form'>";
    echo "<div class='imgcontainer'>";
      echo "<img src='img/ERP.png' alt='Login' class='Login'>";
    echo "</div>";

    echo "<div class='container'>";
      echo "<label for='Username'><b>Username</b></label>";
      echo "<input type='text' placeholder='Enter Username' name='Username' id='Username' value='$username' required> ";
      echo "<button type='submit'>Login</button>";
      echo "<br>";
    echo "</div>";

    echo "<div class='container' style='background-color:#f1f1f1'>";
    // echo "<button type='reset' form='Form' class='cancelbtn' name='reset' onclick='resetForm('Form') ; return false;' />Cancel</button>";


    echo "</div>";
  echo "</form>";
?>
<form align="center">
<button align="center" type="reset" form="Form" class="cancelbtn" name="reset" onclick="resetForm('Form') ; return false;" />Cancel</button>
</form>
</body>
</html>
