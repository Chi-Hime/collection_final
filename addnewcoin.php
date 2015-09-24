<?php
		require("db_creds.inc.php");
		
		if ($_SERVER["REQUEST_METHOD"]=="POST"){
			
			$state_abbr=filter_var($_POST['inputState'], FILTER_SANITIZE_STRING);
			$coin_year=filter_var($_POST['inputYear'], FILTER_SANITIZE_NUMBER_INT);
			
			if (isset($state_abbr) && isset($coin_year)){
				  
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "INSERT INTO coin_table(CoinYear, State_Abbr) values(" . $coin_year .",'". $state_abbr . "')";
				
				if ($conn->query($sql) === TRUE) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
 
				$conn->close();
			}
		  

			


		}
		
		
		  
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Coins Collection</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">



  </head>
  <body>
    <div class="container">
		<br/>
		<p>
			<a href="/" class="btn btn-primary btn-lg">Home</a>
			<a href="addnewcoin.php" class="btn btn-primary btn-lg">Add New Coin</a> 
		</p>
		 <br/>
		 
		  
			<h2>Add New Coin</h2>
			<br/>
			<form class="form-horizontal"  id="form_addnewcoin" method="post">
			  <div class="form-group">
				<label for="inputState" class="col-sm-2 control-label">State</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputState" name="inputState" placeholder="State Abbr" 
					required minlength="2" maxlength="2"
					>
				</div>
			  </div>
			  <div class="form-group">
				<label for="inputYear" class="col-sm-2 control-label">Year</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputYear" name="inputYear" placeholder="Coin Year" 
					required minlength="4" maxlength="4">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="inputImage" class="col-sm-2 control-label">Image</label>
				<div class="col-sm-10">
				  <input type="file" name="inputImage" accept="image/*">
				</div>
			  </div>
			  
			  
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;Add&nbsp;&nbsp;&nbsp;</button>
				</div>
			  </div>
			</form>

	</div>

	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	
	<script>
		$("#form_addnewcoin").validate();
	</script>
  </body>
</html>