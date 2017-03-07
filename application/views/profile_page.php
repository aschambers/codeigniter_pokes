<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pokes Page</title>
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
<style>
#logout {
	margin-left:1200px;
}
#box {
	border:1px solid black;
	padding-left:10px;
	width: 260px;
}
</style>
<br>
<a href="/logout" id="logout">Log Out</a>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<h3>Welcome, <?= $this->session->userdata('name'); ?>!</h3>
<?php 	
		$pokeCount = 0;
		foreach ($pokes as $poke) 
		{
			$pokeCount += $poke['poke_count'];
		}
?>			
		<h4>
		<?= count($pokes) ?> people poked you! </h4>
		<div id="box">
		<h5>Poke Logs:</h5>
<?php 	
		$pokeCount = 0;
		foreach ($pokes as $poke) 
		{
			$pokeCount += $poke['poke_count'];
?>			
			<h5><?= $poke['name']; ?> poked you <?= $poke['poke_count']; ?> time(s).</h5>
<?php 
		}
?>
		</div>
  	</div>
</div>	
<div class="container">
	<div class="row">
  		<div class="col-md-12">
			<h3>People you may want to poke:</h3>
			<table class="table table-bordered">
			    <thead>
			        <tr>
			          <th>User ID</th>
			          <th>Name</th>
			          <th>Alias</th>
			          <th>Email Address</th>
			          <th>Poke History</th>
			          <th>Action</th>
			        </tr>
			    </thead>
		    <tbody>
<?php 			
		foreach ($users as $user)
		{
			$query = "SELECT * FROM pokes where pokes.user_id = ?";
			$pokes = $this->db->query($query, $user['id'])->result_array();
			$pokeCount = 0;
			foreach ($pokes as $poke) 
			{
				$pokeCount += $poke['poke_count'];
			}
?>		       	
			<tr>
		      <td><?= $user['id']; ?></td>
		      <td><?= $user['name']; ?></td>
		      <td><?= $user['alias']; ?></td>
		      <td><?= $user['email']; ?></td>
		      <td>Poked <?= $pokeCount ?> Time(s)</td>
		      <td>
			    <form action="/pokeUser" method="POST">
		      		<input type="hidden" name="user_id" value="<?= $user['id']; ?>">
		      		<input type="hidden" name="poker_id" value="<?= $this->session->userdata('id'); ?>">
		      		<input type="submit" class="btn btn-info" value="Poke">
		      	</form>
		      </td>
    		</tr>
<?php 			
		} 
?>
		      </tbody>
		    </table>			
  		</div>
  	</div>
</div>
</body>
</html>
