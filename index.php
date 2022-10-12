<!DOCTYPE html>
<html>
<head>
	<title>form submission</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/mycss.css"> -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>


<?php
    include('nav.php');
?>


<div class="container-fluid">

	<div class="row">
		<div class="col-sm-5"></div>
		<div class="col-sm-4">
				<form class="form-control" method="POST" action="contact.php" style="width: 60%; border: 3px; border-collapse: collapse; "  >
					<legend style="text-align: center;">Personal details</legend>
					<div class="form-group">
					   <label for="idnum">ID Number:</label>
					   <input class="form-control" type="number" name="idnum" id="idnum" required>
					</div>

					<div class="form-group">
					First Name:
					<input class="form-control" type="text" name="firstname" id="firstname" required>
					</div>

					<div class="form-group">
					Second Name:
					<input class="form-control" type="text" name="lastname" id="lastname" required>
					</div>

					<div class="form-group">
					Age:
					<input class="form-control" type="number" name="age" id="age"required placeholder="enter your age">
					</div>

					<div class="form-group">
					<input type="radio" name="gender" value="female" id="female" checked>Female
					<input type="radio" name="gender" value="male" id="male">
					Male
					</div>

					<div class="form-group">
					Email:
					<input class="form-control" type="Email" required name="email" id="email" placeholder="example@gmail.com">
					</div>

					<div class="form-group">
					Phone Number:
					<input type="tel" class="form-control"  name="phone" id="number" required placeholder="0701103462">
					</div>


					<div class="form-group">
					<label>Location:</label>
					<select name="location" required class="form-control">
						<option>Nairobi</option>
						<option>Mombasa</option>
						<option>Nakuru</option>
						<option>Eldoret</option>
						<optgroup>Kericho</optgroup>
					</select>

					</div>
				<input class="btn btn-success" type="submit" name="sumbit" id="btn">
			</form>
		</div>
	</div>
		
		</div>
</body>
</html>