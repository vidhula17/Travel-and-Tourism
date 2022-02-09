<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Travel and Tourism</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Travel and Tourism </a>
			</div>
		</div>
	</nav>	
	<ul id = "menu">
	<li><a href = "index.php">Home</a></li> |
		<li><a href = "admin/index.php">Admin</a></li>  |
		<li><a href = "aboutus.php">About us</a></li> |
		<li><a href = "reservation.php">Tourist spot</a></li> |		
		<li><a href = "gallery.php">Gallery</a></li> |		
		<li><a href = "accommodation.php">Accommodation</a></li> |
		<li><a href = "restaurant.php">Restaurant</a></li> |		
		<li><a href = "events.php">Events</a></li> |
		<li><a href = "transportation.php">Transportation</a></li>  | 
		<li><a href = "dineandlounge.php">Dine and Lounge</a></li> |			
		<li><a href = "enquiry.php">Enquiry</a></li>  |
		<li><a href = "map.php"> Map</a></li>  |
		<li><a href = "contactus.php">Contact us</a></li> 
		
	</ul>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>Tell us if you have any enquiry</h3></strong>
				<br />
				<?php 
				   require_once 'admin/connect.php';
				   $query = $conn->query("SELECT * FROM `issues`") or die(mysql_error());
				   $fetch = $query->fetch_array()
				?>
				<div class = "well col-md-4">
					<form method = "POST" enctype = "multipart/form-data" name ="myform" onsubmit="return validateform()">
					<div class = "form-group">
							<label>Name</label>
							<input type = "text" class = "form-control" name = "name" required = "required" />
						</div>
						<div class = "form-group">
							<label>Email</label>
							<input type = "text" class = "form-control" name = "email" required = "required" />
						</div>
						<div class = "form-group">
							<label>Description</label>
							<input type = "text" class = "form-control" name = "description" required = "required" />
						</div>
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_issues"><i class = "glyphicon glyphicon-save"></i> Submit</button>
						</div>
					</form>
				</div>

				<div class = "col-md-4"></div>
				<?php require_once 'add_query_enquiry.php'?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>Created by Vidhula  </label>
	</div>
	<script>
		
		function validateform(){
			var email=document.myform.email.value;
			var atposition=email.indexOf("@");
			var dotposition=email.lastIndexOf("."); 
			 if (atposition<1 || dotposition<atposition+2 ||dotposition+2>=email.length){
				alert("Please enter a valid e-mail address ");
                return false;
               }
			else{
				alert("Your issue has been successfully sent and we would look into it. Thank you!");
			}

		}
	</script>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>