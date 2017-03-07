<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
</head>
<body>
<?php
		if($this->session->flashdata('success'))
		{
?>	
		<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close"></button>
			<strong>Success! </strong> <?= $this->session->flashdata('success'); ?>
		</div>
<?php
		}
?>
<?php 
		if($this->session->flashdata('error'))
		{
?>	
		<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close"></button>
			<strong>Error! </strong><?= $this->session->flashdata('error'); ?>
		</div>
<?php
		}
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
			<div class="col-md-6">
			  	<h1>Register</h1>
			  	<form action="register" method="post">
					<div class="form-group">
					    <label for="name">Name:</label>
					    <input type="text" class="form-control" id="name" name="name" placeholder=" Full Name">
					</div>
					<div class="form-group">
					    <label for="alias">Alias:</label>
					    <input type="text" class="form-control" id="alias" name="alias" placeholder="Password">
					</div>
					<div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
					</div>
					<div class="form-group">
					    <label for="password">Password:</label>
					    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
					</div>
					<div class="form-group">
					    <label for="confirm_password">Confirm Password:</label>
					    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Password">
					</div>
					<div class="form-group">
					    <label for="date_of_birth">Date of Birth:</label>
					    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
					</div>
					<input type="submit" class="btn btn-info" value="Register">
				</form>
			</div>
			    <div class="col-md-6">
					<h1>Sign In</h1>
					<form action="login" method="post">
						<div class="form-group">
					    	<label for="email">Email address:</label>
					    	<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
					  	</div>
					  	<div class="form-group">
					    	<label for="password">Password:</label>
					    	<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					  	</div>
						<input type="submit" class="btn btn-info" value="Sign In">
					</form>
			    </div>
			</div>
		</div>
	</div>
</div>
</body>
</head>
