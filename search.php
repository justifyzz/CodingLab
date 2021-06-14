<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>Поиск</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">
				<?php
				$connection = mysqli_connect('localhost','root', 'root', 'dariger');
				if(isset($_POST['search'])){
				$searchKey = $_POST ['search'];
				$sql = "SELECT * FROM registration WHERE firstName LIKE '%$searchKey%'";
				}else
                $sql = "SELECT * FROM registration";

				$result = mysqli_query($connection,$sql);
				
				?>
				<form action="" method="POST">
					<div class="col-md-6">
						<input type="text" name="search" class='form-control' placeholder="Поиск по имени" value="" >
					</div>
					<div class="col-md-6 text-left">
						<button class="btn">Поиск</button>
					</div>
				</form>

				<br>
				<br>
				</div>
				<table class="table table-bordered">
					<tr>
						<th>Имя</th>
						<th>Фамииля</th>
						<th>Номер телефона</th>
					</tr>
					<?php while($row = mysqli_fetch_object($result)) { ?>
					<tr>
						<td><?php echo $row->firstName ?></td>
						<td><?php echo $row->lastName ?></td>
						<td><?php echo $row->number?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
