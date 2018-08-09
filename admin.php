<html>
	<head>
		<title>Admin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="gallery.css">
		<link rel="stylesheet" type="text/css" href="admin.css">
		<script src="admin.js"></script>
		<script src="jquery-3.3.1.js"></script>
	</head>
	
	<body>
		<div class="header">
			<div class="topnav">
				<a class="active" href="admin.php">Home</a>
				<a href="gallery.php">Gallery</a>
				<a href="customer.php">About</a>
				<a href="#reg">Log in</a>
				<a href="#reg">Register</a>
			</div>
		</div>

		<div class="row">
			<div class="tab">
				<button class="tablinks" onclick="openCity(event, 'Add_Product')" id="defaultOpen">Add Product</button>
				<button class="tablinks" onclick="openCity(event, 'Customer_Products')">Customer Products</button>
			</div>

			<div id="Add_Product" class="tabcontent" >
				<div class="col-12">
					<form target="_blank" method="get" id="product_detail">
						<table>
						<tr>
							<td>Product Name :<br><br></td>
							<td>
								<input type="text" name="pName" style="width: 200px;"><br><br>
							</td>
							<td rowspan="3">
								<img src="" id="profile-img-tag" width="200px" name="pic"/><br>
								<input type="file" name="file" id="profile-img" onchange="readURL(this);"  style="margin-top: 15px;">
								<input type="hidden" id="imgLoc" name="imgLoc" value="">
							</td>
						</tr>
						<tr>
							<td>Product quantity :<br><br></td>
							<td>
								<input type="text" name="pQuantity" style="width: 50px;"><br><br>
							</td>
						</tr>
						<tr>
							<td>Product Detail :<br><br><br><br><br></td>
							<td>
								<textarea rows="4" cols="40" name="pDetail" form="product_detail">Enter text here...</textarea>
								<br><br>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" value="Submit" class="button">
								<input type="reset" value="Reset" style="margin-left: 20px;" class="button">
							</td>
						</tr>
						</table>
					</form> 
				</div>
			</div>

			<div id="Customer_Products" class="tabcontent">
				<div class="ex1">
					<?php
						for($i=0 ;$i<20 ;$i++)
						{
							echo '<div id="box">';
							echo '	<img src="1.jpg" id="img">';
							echo '	<div class="box-text">';
							echo '		<br><a href="#news">View other products</a>';
							echo '</div></div>';
						}
					?>
				</div>
			</div>
		
		</div>
		<script>document.getElementById("defaultOpen").click();</script>
	</body>
</html>