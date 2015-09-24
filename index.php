<?php
  
  
	require("db_creds.inc.php");
	
	$inputStateNameSearch = $_GET['inputStateNameSearch'];
	$deletecoinid = $_GET['deletecoinid'];
	 
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}  
	if (isset($deletecoinid)){
		$sql = "delete from coin_table where coinid = " . $deletecoinid . ";";
		
		if ($conn->query($sql) === TRUE) {
			echo "Deleted successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

	}
	 
	
	if (isset($inputStateNameSearch)) {
		$sql = "select c.coinid, c.coinyear, s.state_name, s.state_abbr from state_table as s join coin_table as c on s.state_abbr = c.state_abbr where s.state_name like '%" . $inputStateNameSearch . "%'";
	} else{
		$sql = "select c.coinid, c.coinyear, s.state_name, s.state_abbr from state_table as s join coin_table as c on s.state_abbr = c.state_abbr";
	}
	
	
	$result = $conn->query($sql);
 

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

	<script>
	function confirmdelete(coinid) {
		if (confirm("Are you sure you want to delete?") == true) {	
			window.location.assign("http://sokeang.khm.link/index.php?deletecoinid="+coinid)
		}
		return false;
	}
	</script>

  </head>
  <body>
    <div class="container">
		<br/>
		<p>
			<a href="/" class="btn btn-primary btn-lg">Home</a>
			<a href="addnewcoin.php" class="btn btn-primary btn-lg">Add New Coin</a> 
		</p>
		 <br/>
		 
		 
		 <h2>Find Coins</h2>
		<form class="form-inline">
		  <div class="form-group">
			<div class="input-group">
			  <div class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></div>
			  <input type="text" class="form-control" name="inputStateNameSearch" placeholder="State Name" value="<?php echo $inputStateNameSearch;?>">
			</div>
		  </div>
		  <button type="submit" class="btn btn-primary">Search</button>
		</form>
		<br/>
		<h2>Results</h2>
		
		<form class="form-horizontal"> 
		  <table class="table table-bordered">
			  <thead>
				<tr>
				  <th>#</th>
				  <th>State Name</th>
				  <th>State Abbr</th>
				  <th>Year</th>
				  <th>Image</th>
				  <th></th>
				</tr>
			  </thead>
			  <tbody>
					<?php
						$row_number = 0;
						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								$row_number = $row_number + 1;
								?>
								  
								<tr>
								  <th scope="row"><?php echo $row_number; ?></th>
								  <td><?php echo $row["state_name"]; ?></td>
								  <td><?php echo $row["state_abbr"]; ?></td>
								  <td><?php echo $row["coinyear"]; ?></td>
								  <td></td>
								  <td>
									<a href="editcoin.php?coinid=<?php echo $row["coinid"]; ?>" class="btn btn-primary">Edit/Update</a> 
									<button onclick="confirmdelete(<?php echo $row["coinid"]; ?>);return false;" class="btn btn-danger">Delete</button>
								  </td>
								  
								</tr>
									  
								<?php
							}
						} else {
							echo "0 results";
						}

					?>
			  </tbody>
			</table> 
	      </form>

		 
	</div>

	

	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>


<?php

	$conn->close();

?>