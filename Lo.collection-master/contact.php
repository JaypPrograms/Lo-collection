<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href= "style.css">
	<title>lo.collection</title>
</head>
<body style = " background-color: rgba(81,45,11,1);">
<?php echo file_get_contents("header.html"); ?> 
	<div class="wrapper">
		<ul class="try">
			<h2 class="contact">Contact Us</h2>
			<p class="contact"> 69, Bacoor, 4102 Cavite, Philippines</p> 
			<p class="contact"> jayperson.babaran@cvsu.edu.ph</p>
			<p class="contact"> 09489576571</p>
		</ul>
		<form>    
			<input type="text" name="Name" placeholder="Name">  
			<br></br>   
			<input type="text" name="address" placeholder="Address">
			<br></br>
			<input class="small" type="text" name="email" placeholder="Email">
			<input class="small" type="text" name="phone" placeholder="Phone">
			<br></br>
			<input type="text" name="subject" placeholder="Subject">
			<br></br>
			<input class="mess" type="text" name="message" placeholder="Message">
			<a href="#"><button>Explore</button></a> 
		</form>  
	</div>      
</body>	
</html>
