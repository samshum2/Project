<?php session_start(); ?>
<!DOCTYPE>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1><img src="img/ERP.png" width="180px">IVE Restaurant ERP System</h1>
				<form name="StaffInfo" action="VerifyUser2.php" method="post" id="contact-form">
					<div class="form-group">
						<!-- <label for="Account">Staff ID or Phone No.</label> -->
						<label for="Account">Staff ID or Phone No.</label>
						<input type="text" class="form-control" name="Account" placeholder="Staff ID or Phone No." required>
					</div>
					<div class="form-group">
						<label for="Pwd">Password</label>
						<input type="password" class="form-control" name="Pwd" placeholder="Password" required>
					</div>
					<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
					<button type="reset" class="btn btn-danger" name="Reset" value="Reset" id="reset_form">Reset</button>
				</form>
				<label><p>1,2:RM<br>3,4:CM<br>5,6:HW<br>7,8:AC<br>9:SP<br>10:PM</p></label>

				<div class="response_msg"></div>
			</div>
		</div>
	</div>

</body>
</html>