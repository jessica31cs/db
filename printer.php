<?php  
$servername = "localhost";
$username = "cs631";
$password = "cs631";
$dbname = "cs631database";
?>

<html>

<body>
	
		<center>
		<h4>
			PRINTER
		</h4>
	</center>
	<center>
		<form method= "post" action="AddPrinter.php">
			ProductID: <input type="number" name="PID" ><br><br>
			Product Type: <input type="text" name="PType"><br><br>
			Product name: <input type="text" name="PName"><br><br>
			Price: <input type="number" name="PPrice" rows ="3" cols = "50"><br><br>
			Description: <input type="text" name="Description"><br><br>
			Product Quantity:<input type="number" name="PQuantity"><br><br>
			PrinterType:<input type="text" name="PrinterType"><br><br>
			Resolution:<input type="number" name="Resolution"><br><br>
			<button>Submit</button>
		</form>
		<p>
<form action="Admin2.php">
<input type="submit" value="back">
</form>

</p>
	</center>	
    </div>
  </main>
</div>

</body>
</html>