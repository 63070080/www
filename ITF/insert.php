<?php
	$conn = mysqli_init();
	mysqli_real_connect($conn, 'data-tanapong.mysql.database.azure.com', 'nutgod@data-tanapong', 'nut7godalot9?', 'ITFLab', 3306);
	if(mysqli_connect_errno($conn)) {
		die('Failed to connect to MySQL: '.mysqli_connect_error());
	}
	$product = $_POST['product'];
	$price = $_POST['price'];
    $discount = $_POST['discount'];
    $total = $price - $price*$discount/100;
	$sql = "INSERT INTO product (Product, Price, Discount, Total) VALUES ('$product', '$price', '$discount', '$total')";
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<style type="text/css">
		.card {
			border-top: solid 5px #ff66ff;
		}
	</style>
</head>
<body class="bg-info py-5">
	<div class="container bg-dark text-info">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body">
						<h2 align="center">
						<?php
							if(mysqli_query($conn, $sql)) {
								echo "ADD SUCCESS";
							}
							else {
								echo "FAILED TO ADD";
							}
						?>
						</h2>
						<p align="center" class="mt-4 mb-0"><a href="index.php" class="btn btn-sm btn-success">BACK</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>