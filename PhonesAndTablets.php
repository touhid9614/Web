<?php
	session_start();
	include("adminHeader.php");
?>

<html>
	<head>
		<title>Kine Felun
		</title>
	</head>
	
	<body>
		<center>
			<form method = "POST">
				<input type="button" value="Catagory" onclick="window.location.href='AddItem.php'" size="30" ><br/><br/>
				Phones And Tablets
				<table border = "0" cellspacing = "30">
					<tr>
						<td>
							<input type = "text" name = "id" placeholder = "Item Id"><br/><br/>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "radio" name = "type" value = "Smart Phones">Smart Phones
							<input type = "radio" name = "type" value = "Smart Watch">Smart Watch
							<input type = "radio" name = "type" value = "Accesories">Accesories
							
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "text" name = "brand" placeholder = "Brand"><br/><br/>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "text" name = "description" placeholder = "Description"><br/><br/>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "number" name = "price" placeholder = "Price"><br/><br/>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "number" name = "discount" placeholder = "Discount"><br/><br/>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "text" name = "size" placeholder = "Size"><br/><br/>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "text" name = "IName" placeholder = "Image Name"><br/><br/>
						</td>
					</tr>
					
				</table>
				<input type = "submit" value = "Insert" name = "insert"><br/><br/>
			</form>
		</center>
	</body>
	<br/>
	<br/>
	<br/>
</html>

<?php
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$id = $_POST['id'];
		$catagory = "Phones And Tablets";
		$type = $_POST['type'];
		$brand = $_POST['brand'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$discount = $_POST['discount'];
		$size = $_POST['size'];
		$IName = $_POST['IName'];
		
		include("Insert.php");
	}
	
?>

