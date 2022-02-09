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
				<a class = "navbar-brand" >Travel and Tourism</a>
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
				<br />
				<?php 
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `tourist spot` WHERE `spot_id` = '$_REQUEST[spot_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>
				<div style = "height:300px; width:800px;">
					<div style = "float:left;">
						<img src = "photo/<?php echo $fetch['photo']?>" height = "300px" width = "400px">
					</div>
					<div style = "float:left; margin-left:10px;">
						<h3><?php echo $fetch['spot_name']?></h3>
						<h3 style = "color:pink;"><?php echo "Price:".$fetch['price']."Rs";?></h3> 
						<h3 style = "color:black;"><?php echo "Description:".$fetch['desc']?></h3>
					</div>
				</div>
				<br style = "clear:both;" />
				<div class = "well col-md-4">
					<form name="myform" method = "POST" enctype = "multipart/form-data"  onsubmit="return validateform()" >
						<div class = "form-group">
							<label>Name</label>
							<input type = "text" class = "form-control" name = "name" required = "required" />
						</div>
						<div class = "form-group">
							<label>Date of birth</label>
							<input type = "date" class = "form-control" name = "dateofbirth" required = "required" />
						</div>
						<div class = "form-group">
							<label>Email</label>
							<input type = "text" class = "form-control" name = "email" required = "required" />
						</div>
						<div class = "form-group">
							<label>City</label>
							<input type = "text" class = "form-control" name = "city" required = "required" />
						</div>
						<div class = "form-group">
							<label>Pincode</label>
							<input type = "text" class = "form-control" name = "pincode" required = "required" />
						</div>
						<div class = "form-group">
							<label>Contact No</label>
							<input type = "text" class = "form-control" name = "contactno" required = "required" />
						</div>
						<div class = "form-group">
							<label>Transportation ID</label>
							<input type = "text" class = "form-control" name = "transportation_id" required = "required" />
						</div>
						<div class = "form-group">
							<label>Restaurant ID</label>
							<input type = "text" class = "form-control" name = "restaurant_id" required = "required" />
						</div>
						<div class = "form-group">
							<label>Accommodation ID</label>
							<input type = "text" class = "form-control" name = "accom_id" required = "required" />
						</div>
						<div class = "form-group" required="required">
							<label>Certificate Type</label><br>
							<input type = "radio"  name="cer_type" />
							<label for="Dose1" name="Dose1">Dose-1</label><br>
							<input type = "radio" name="cer_type" />
							<label for="Dose2">Dose-2</label><br>
						</div>
						<div class = "form-group" required="required">
							<label>Vaccine Name</label>
							<select if="vaccine-name" name="vaccine-names">
							<option value="Covishield">Covishield</option>
							<option value="Covaxin">Covaxin</option>
							<option value="Sputnik V">Sputnik V</option>
							<option value="Moderna">Moderna</option>
							<option value="Pfizer">Pfizer</option>
							<option value="Janssen">Janssen</option>
						</select>
						</div>
						<br />
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_customer"><i class = "glyphicon glyphicon-save"></i> Submit</button>
						</div>
					</form>
				</div>
				<div class = "col-md-4"></div>
				<?php require_once 'add_query_reserve.php'?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Created by Vidhula </label>
	</div>
	<script>
		
		function validateform(){
			var email=document.myform.email.value;
			var mobile=document.myform.contactno.value;
			var atposition=email.indexOf("@");
			var dotposition=email.lastIndexOf("."); 
			var pincode= document.myform.pincode.value;
			var type=document.myform.cer_type.value;
			var phoneno = /^\d{10}$/;
			 if (atposition<1 || dotposition<atposition+2 ||dotposition+2>=email.length){
				alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);
                return false;
               }
			else if(!mobile.match(phoneno))
			{
			alert("Mobile number should contain exactly 10 digits");
			return false;
			}
			else if(!(pincode.length==6))
			{
				alert("Pincode should have 6 digits");
					return false;
			}
			else if(type=="Dose1")
			{
				alert("Please get your second shot to travel safely with us");
			}
			else{
				alert("Your booking is successful . Thank you for choosing us");
			}

		}
	</script>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>