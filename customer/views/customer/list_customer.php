<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Danh Sách khách hàng</h1>
	<a href="customer/insert">Thêm</a>
	<table>
		<tr>
			<th>Mã </th>
			<th>Tên</th>
			<th>Giới Tính</th>
			<th>Ngày sinh</th>
			<th>Số ĐT</th>
			<th>Email</th>
		</tr>

		<?php foreach ($listCustomer as $customer): ?>
			<tr>
				<td> <?php echo $customer->Id_Customer ?> </td>
				<td> <?php echo $customer->Name_Customer ?> </td>
				<td> <?php echo $customer->Gender ?> </td>
				<td> <?php echo $customer->DoB ?> </td>
				<td> <?php echo $customer->Phone_Num ?> </td>
				<td> <?php echo $customer->Email ?> </td>
			</tr>
		<?php endforeach ?>	
	</table>

</body>
</html>