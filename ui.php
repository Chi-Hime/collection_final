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
		  <button type="button" class="btn btn-primary btn-lg">Home</button>
		  <button type="button" class="btn btn-primary btn-lg">Create</button>
		  <button type="button" class="btn btn-primary btn-lg">Update</button>
		  <button type="button" class="btn btn-primary btn-lg">Delete</button>
		</p>
		 
		  <table class="table table-bordered">
			  <thead>
				<tr>
				  <th>#</th>
				  <th>State Name</th>
				  <th>State Abbr</th>
				  <th>Year</th>
				  <th></th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <th scope="row">1</th>
				  <td>Minnesota</td>
				  <td>MN</td>
				  <td>2010</td>
				  <td>
				    <button type="button" class="btn btn-primary">Edit/Update</button>
					<button type="button" class="btn btn-danger">Delete</button>
				  </td>
				</tr>
				<tr>
				  <th scope="row">2</th>
				  <td>Minnesota</td>
				  <td>MN</td>
				  <td>2011</td>
				  <td>
				    <button type="button" class="btn btn-primary">Edit/Update</button>
					<button type="button" class="btn btn-danger">Delete</button>
				  </td>
				</tr>
				<tr>
				  <th scope="row">3</th>
				  <td>Washington</td>
				  <td>WA</td>
				  <td>2010</td>
				  <td>
				    <button type="button" class="btn btn-primary">Edit/Update</button>
					<button type="button" class="btn btn-danger">Delete</button>
				  </td>
				</tr>
			  </tbody>
			</table>
		 
	
	 
		<hr/>
	
			<h2>Find Coins</h2>
			<form class="form-inline">
			  <div class="form-group">
				<div class="input-group">
				  <div class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></div>
				  <input type="text" class="form-control" id="exampleInputAmount" placeholder="State Name">
				  
				</div>
			  </div>
			  <button type="submit" class="btn btn-primary">Search</button>
			</form>
			
			<br/>
			<h2>Results</h2>
			<table class="table table-bordered">
			  <thead>
				<tr>
				  <th>#</th>
				  <th>State Name</th>
				  <th>State Abbr</th>
				  <th>Year</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <th scope="row">1</th>
				  <td>Minnesota</td>
				  <td>MN</td>
				  <td>2010</td>
				   
				</tr>
				<tr>
				  <th scope="row">2</th>
				  <td>Minnesota</td>
				  <td>MN</td>
				  <td>2011</td>
				  
				</tr>
				<tr>
				  <th scope="row">3</th>
				  <td>Washington</td>
				  <td>WA</td>
				  <td>2010</td>
				   
				</tr>
			  </tbody>
			</table>
			
			
			
			<hr/>
			
			<h2>Add New Coin</h2>
			<br/>
			<form class="form-horizontal">
			  <div class="form-group">
				<label for="inputState" class="col-sm-2 control-label">State</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputState" placeholder="State Name">
				</div>
			  </div>
			  <div class="form-group">
				<label for="inputYear" class="col-sm-2 control-label">Year</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputYear" placeholder="Coin Year">
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
  </body>
</html>