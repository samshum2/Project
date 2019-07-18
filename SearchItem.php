<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-8">
<h1><img src="img/ERP.png" width="100px">Search Item</h1>
<form name="StaffInfo" action="SearchItemController.php" method="post" id="contact-form">


<div class="form-group">
<label for="ItemID">Item ID</label>
<input type="text" class="form-control" name="ItemID" placeholder="Item ID">
</div>

<div class="form-group">
<label for="ItemName">Item Name</label>
<input type="text" class="form-control" name="ItemName" placeholder="Item Name">
</div>

<div class="form-group">
<label for="Description">Description</label>
<input type="text" class="form-control" name="Description" placeholder="Description">
</div>

<div class="form-group">
<label for="VirtualID">Virtual ID</label>
<input type="text" class="form-control" name="VirtualID" placeholder="Virtual ID">
</div>

<div class="form-group">
<label for="Category_Type">Category Type</label>
<input type="text" class="form-control" name="Category_Type" placeholder="Category Type">
</div>

<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
<button type="reset" class="btn btn-danger" name="Reset" value="Reset" id="reset_form">Reset</button>
<!-- <button type="button" class="btn btn-primary" onclick="history.back()">Back</button> -->
<button type="button" class="btn btn-warning" onclick='location="Login2.php"'>Logout</button>
</form>


<div class="response_msg"></div>
</div>
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</body>
</html>