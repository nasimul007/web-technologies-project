<html>
	<head>
		<title>Gallery</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="gallery.css">
		<link rel="stylesheet" type="text/css" href="admin.css">
		<script src="gallery.js"></script>
	</head>
	
	<body>	
	
		<div class="header">
			<div class="topnav">
				<a class="active" href="admin.php">Home</a>
				<a href="gallery.php">Gallery</a>
				<a href="customer.php">About</a>
				<a class="tablinks" onclick="openTab(event, 'Log_in')">Log in</a>
				<a class="tablinks" onclick="openTab(event, 'Register')">Register</a>
			</div>
		</div>

		
		<div id="Log_in" class="logtab" >
			<div class="col-12">
				<form target="_blank" method="get" id="product_detail">
					<table>
					<tr>
						<td>Email :<br><br></td>
						<td>
							<input type="email" name="pEmail" style="width: 200px;"><br><br>
						</td>
					</tr>
					<tr>
						<td>Password :<br><br></td>
						<td>
							<input type="password" name="pPassword" style="width: 200px;"><br><br>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" value="Log In" class="navbutton">
							<input type="reset" value="Cancel" style="margin-left: 20px;" class="navbutton" onclick="closeTab(event,'Log_in')">
						</td>
					</tr>
					</table>
				</form> 
			</div>
		</div>
		
		<div id="Register" class="regtab" >
			<div class="col-12">
				<form target="_blank" method="get" id="product_detail">
					<table>
					<tr>
						<td>Name :<br><br></td>
						<td>
							<input type="text" name="pName" style="width: 200px;"><br><br>
						</td>
					</tr>
					<tr>
						<td>Email :<br><br></td>
						<td>
							<input type="email" name="pEmail" style="width: 200px;"><br><br>
						</td>
					</tr>
					<tr>
						<td>Mobile Phone :<br><br></td>
						<td>
							<input type="text" name="pMobile" style="width: 200px;"><br><br>
						</td>
					</tr>
					<tr>
						<td>Password :<br><br></td>
						<td>
							<input type="password" name="pPassword" style="width: 200px;"><br><br>
						</td>
					</tr>
					<tr>
						<td>Confirm Password :<br><br></td>
						<td>
							<input type="password" name="pCPassword" style="width: 200px;"><br><br>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" value="Log In" class="navbutton">
							<input type="reset" value="Cancel" style="margin-left: 20px;" class="navbutton" onclick="closeTab(event,'Register')">
						</td>
					</tr>
					</table>
				</form> 
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-3 menu">
				<ul>
					<li>
						<span>Mouse over me</span>
						<div class="dropdown-content">
							<a href="#news">Hello World!</a><br><br>
							<a href="#news">Hello World!</a>
						</div>
					</li>
					<li>
						<span>Mouse over me</span>
						<div class="dropdown-content">
							<a href="#news">Hello World!</a><br><br>
							<a href="#news">Hello World!</a>
						</div>	
					</li>
				</ul>
			</div>

			<div class="col-9">
			
			<?php
				for($i=0 ;$i<20 ;$i++)
				{
					echo '<div class="box">';
					echo '	<img src="1.jpg" >';
					echo '	<div class="box-text">';
					echo '		<br><a href="#news">View</a>';
					echo '		<a href="#news">Add to cart</a>';
					echo '</div></div>';
				}
			?>
			</div>
		</div>
		
	</body>
</html>