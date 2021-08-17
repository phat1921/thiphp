<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Thêm khách hàng</h1>
	<form action="?controller=customer&action=insertprocess" method="post">
		Tên: <input type="text" name="Name_Customer"><br>
		Ngày Sinh: <input type="date" name="DoB"><br>
		Giới Tính:<select name="Gender">	
				<option value="1">Nam</option>	
				<option value="0">Nữ</option>			
			</select>
		Số ĐT:<input type="text" name="Phone_Num"><br>	
		Email:<input type="text" name="Email"><br>	
		
			<button>Thêm</button>
	</form>
</body>
</html>