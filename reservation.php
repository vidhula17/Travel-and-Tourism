<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Travel and Tourism Management</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" > Travel and Tourism</a>
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
				<strong><h3>MAKE A RESERVATION</h3></strong>
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `tourist spot` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['spot_name']?></h3>
							<h4 style = "color:blue;"><?php echo "Price:".$fetch['price']." Rs"?></h4>
							<h5 style="color:green;"><?php echo "Rating:".$fetch['rating']?></h5>
							<br /><br /><br /><br /><br /><br />
							<a style = "margin-left:580px;" href = "add_reserve.php?spot_id=<?php echo $fetch['spot_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
						</div>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:center; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>Created by Vidhula  </label>
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>