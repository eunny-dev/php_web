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
						<label for="firstname">First Name:
					<input class="form-control" type="text" name="firstname" id="firstname" required></label>
					
					</div>
					

					<div class="form-group">
						<label for="lastname">Second Name:
					<input class="form-control" type="text" name="lastname" id="lastname" required></label>
					
					</div>

					<div class="form-group">
						<label for="age">
						Date of Birth:
					<input class="form-control" type="date" name="age" id="age"required placeholder="enter your age">
						</label>
					
					</div>
					
					<label >Gende:</label>

					<div class="form-group">
						<label for="gender">
						<input type="radio" name="gender" value="female" id="female" checked>Female
						</label>
					<label for="gender">
					<input type="radio" name="gender" value="male" id="male">
					Male
					</label>
					</div>

					<div class="form-group">
						<label for="email">
						Parents Email:
					<input class="form-control" type="Email" required name="email" id="email" placeholder="example@gmail.com">
						</label>
					</div>

					<div class="form-group">
					Parents Phone Number:
					<input type="tel" class="form-control"  name="phone" id="number" required placeholder="0701103462">
					</div>

					<div class="form-group">
					Current Grade:
					<input type="text" class="form-control"  name="class" id="number" required placeholder="grade two">
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