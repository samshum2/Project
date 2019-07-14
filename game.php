<!DOCTYPE html>
<html>
    <head>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title> </title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        </script>

        <script type="text/javascript">
        function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == ' ') {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
        }
        return "";
      }
        answer = 0;
        $(document).ready(function () {
          $("#username").val(getCookie("UsernameCookie"));
          $("#username2").val(getCookie("UsernameCookie"));
          console.log(getCookie("UsernameCookie"))
      		$.ajax({
      			type: 'GET',
      			url: 'question.php',
      			dataType: 'json',
      			success: function (result) {
      			    $("#question").html(result.question);
                	$("#question2").val(result.question);
      			    $("#answer").val(result.answer);
      			    answer = result.answer;
      			},
	            error: function(xhr, textStatus, error){
				      console.log(xhr.statusText);
				      console.log(textStatus);
				      console.log(error);
				}
      		});
      		$('#go').click(function(){
      		    youranswer = $("#youranswer").val();
      		    if (answer == $("#youranswer").val())
      		        alert("You Win!");
      		    else
      		        alert("You Lose! Answer is "+answer);
      		});
        });
        </script>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg bg-primary navbar-dark" style="margin: 0px 0;">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>

        <!-- <a class="navbar-brand"><b>E-learing System</b></a> -->
<div class="collapse navbar-collapse" id="navb">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="Login.php">Switch User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="getResult.php">My History</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.ixl.com/promo?partner=google&campaign=1177&adGroup=learning+math&gclid=Cj0KCQjwtMvlBRDmARIsAEoQ8zQ54HuMY-bCDBpzFeJoDpfOnqYnP5mdkco8d79-yjGmoZrA0l_5ZXcaAoRHEALw_wcB">Online Learning</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" id="username2" readonly>
    </form>
  </div>
</nav>

        <h1 id="question" align="center"></h2>
        <form method="post" action="chkdata.php" align="center">

      		<p><label> <input type="hidden" name="username" id="username" readonly /></label></p>
      		<p><label>Your Answer <input type="number" name="youranswer" id="youranswer" /></label></p>
          <input type="hidden" name="question2" id="question2">
      		<input type="hidden" name="answer" id="answer">
      		<button type="submit" id="go" class="btn btn-success">
            <span class="spinner-grow spinner-grow-sm"></span>Submit</button>
          <button type="submit" formaction="getResult.php" class="btn btn-danger">
          Get Result</button>
      	  </form>

    </body>
</html>