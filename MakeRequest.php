<?php session_start(); 
// echo 'User:';
// echo $_SESSION['User'];
?>
<!DOCTYPE>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 25%;
  padding: 5px;
  margin-left: auto;
  margin-right: auto;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<body>
<div class="container">
<div class="row">
<div class="col-md-8">
<h1><img src="img/ERP.png" width="100px">Make Request</h1>
</div>
</div>
</div>



<div class="container">
<div class="row">
<div class="col-md-8">
<div class="form-group">

<!-- <p><b>Plase Select a Item</b></p>
<Select name='MakeRequest'>
	<optgroup label="Pork" style="font-weight:bold;">Pork</optgroup>
	<Option Value='Pork chops'>Pork chops</Option>
	<Option Value='Pig feet'>Pig feet</Option>
	<optgroup label="Beef" style="font-weight:bold;">Beef</optgroup>	
	<Option Value='Steak'>Steak</Option>
	<Option Value='Burdock'>Burdock</Option>
	<optgroup label="Chicken" style="font-weight:bold;">Chicken</optgroup>
	<Option Value='Chicken leg'>Chicken leg</Option>
	<Option Value='Chicken egg'>Chicken leg</Option>
	<optgroup label="Fish" style="font-weight:bold;">Fish</optgroup>
	<Option Value='Salmon'>Salmon</Option>
	<Option Value='Tuna Fish'>Tuna Fish</Option>
	<optgroup label="Tableware" style="font-weight:bold;">Tableware</optgroup>
	<Option Value='Bowl'>Bowl</Option>
	<Option Value='Chopsticks'>Chopsticks</Option>
</Select> -->

<form name="StaffInfo" action="MakeRequestController.php" method="post" id="contact-form">
	<label>Plase Select a Item</label><br>
	<Select name='MakeRequest'>
	<optgroup label="Pork" style="font-weight:bold;">Pork</optgroup>
	<Option Value='Pork chops'>Pork chops</Option>
	<Option Value='Pig feet'>Pig feet</Option>
	<optgroup label="Beef" style="font-weight:bold;">Beef</optgroup>	
	<Option Value='Steak'>Steak</Option>
	<Option Value='Burdock'>Burdock</Option>
	<optgroup label="Chicken" style="font-weight:bold;">Chicken</optgroup>
	<Option Value='Chicken leg'>Chicken leg</Option>
	<Option Value='Chicken egg'>Chicken leg</Option>
	<optgroup label="Fish" style="font-weight:bold;">Fish</optgroup>
	<Option Value='Salmon'>Salmon</Option>
	<Option Value='Tuna Fish'>Tuna Fish</Option>
	<optgroup label="Tableware" style="font-weight:bold;">Tableware</optgroup>
	<Option Value='Bowl'>Bowl</Option>
	<Option Value='Chopsticks'>Chopsticks</Option>
</Select><br><br>
<label for="Qty">Qty</label>
<input type="number" class="form-control" name="Qty" placeholder="Qty" required>
</div>

<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
<button type="reset" class="btn btn-danger" name="Reset" value="Reset" id="reset_form">Reset</button>

</form>


<div class="response_msg"></div>
</div>
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</body>
</html>