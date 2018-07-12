<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #c2c4c6">

<div class="header">
  	<h2>create appointment</h2>
  </div>

		<div id="form" style = "position:relative;">
			<form action = "print.php" method="post">
				<input type="date" name="date"><br>
				<input type="text" name="title" placeholder="Title Of Appoinment"><br>
				<textarea rows ="3" cols = "60" name="discription" placeholder="discription"></textarea><br>
				<input type="time" name="start"><br>
				<input type="time" name="end"><br>
				<input type="submit" title="Click To Submit Form" name="submit" >

			</form>
		</div>




</body>
</html>