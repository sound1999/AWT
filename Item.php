<?php
$msg = '';
$item_sl = $item_name = $item_price = $item_code = '';
	if(isset($_POST['form_submit'])) {
		$option = $_POST['option'];
		if($option == '1')
		{
			$item_sl = '101';
			$item_name = 'Pen';
			$item_price = '10';
			$item_code = 'P101';
		}
		elseif ($option == '2') {
			$item_sl = '102';
			$item_name = 'Pencil';
			$item_price = '5';
			$item_code = 'P102';
		}
		elseif ($option == '3') {
			$item_sl = '103';
			$item_name = 'Paper';
			$item_price = '5';
			$item_code = 'P103';
		}
		elseif ($option == '4') {
			$item_sl = '104';
			$item_name = 'Book';
			$item_price = '30';
			$item_code = 'P104';
		}
	}
?>
<?php
$qty = '';
$item_total = '';
	if(isset($_POST['qty_sub'])) {
		$qty = $_POST['qty'];
		$item_sl = $_POST['sl_num'];
		$item_name = $_POST['item_name'];
		$item_price = $_POST['item_price'];
		$item_code = $_POST['item_code'];
		$item_total = $qty * $item_price;
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>ITEM BILL</title>
<style>
.heading
{
border-style:groove;
background: linear-gradient(to bottom left, #33ccff 0%, #000066 100%);
color:white;
}
th
{
background-color:black;
color:white;
}
table
{
background-color:pink;
}
</style>
</head>
<body>
<div class="heading">
<h1>A-Mart</h1>
<br><h3>Welcome to A-MART Online Shopping</h3>
</div>
	<form method="POST">
		<h2>Please select your item:</h2>
		<select name="option" required>
    			<option value="" disabled selected>-Select-</option>
    			<option value="1">Pen</option>
   			<option value="2">Pencil</option>
   			<option value="3">Paper</option>
			<option value="4">Book</option>
  		</select>
  	<input type="submit" name="form_submit">
	</form>
	<table border="2" cellspacing="1">
		<tr>
			<th>Description</th>
			<th>Values</th>
		</tr>
		<tr>
			<td>SL.Number</td>
			<form method="POST">
			<td>
				<input type="text" name="sl_num" value="<?php echo $item_sl; ?>" readonly>
			</td>
			</tr>
			<tr>
				<td>Item Name</td>
				<td><input type="text" name="item_name" value="<?php echo $item_name; ?>" readonly></td>
			</tr>
			<tr>
				<td>Item Price</td>
				<td><input type="text" name="item_price" value="<?php echo $item_price; ?>" readonly></td>
			</tr>
			<tr>
				<td>Item Code</td>
				<td><input type="text" name="item_code" value="<?php echo $item_code; ?>" readonly></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input type="text" name="qty" required></td>
			</tr>
			<br>
	</table>
	<input type="submit" name="qty_sub">
	<br><br>
	</form>
	<h2>A-Mart Stationery Pvt.Ltd.</h2>
	<br>
		<table border="2" cellspacing="1">
			<tr>
				<th colspan="6">A-Mart Reciept/Bill</th>
			</tr>
			<tr>
				<td>Item Name</td>
				<td>Item Code</td>
				<td>Item Price</td>
				<td>Quantity</td>
				<td>Date of purchase</td>
				<td>Total Amount</td>
			</tr>
			<tr>
				<td><?php echo $item_name; ?></td>
				<td><?php echo $item_code; ?></td>
				<td><?php echo $item_price; ?></td>
				<td><?php echo $qty; ?></td>
				<td><?php echo date("d/m/Y"); ?></td>
				<td><?php echo $item_total; ?></td>
			</tr>
		</table>
		<br><br>
		<p>Thankyou for Shopping with A-Mart...</p>
	</div>
	<br>
	<br>
</body>	
</html>