<?php
    $conn = mysqli_connect('data-tanapong.mysql.database.azure.com', 'nutgod@data-tanapong', 'nut7godalot9?', 'ITFLab');
    
    $product = $_POST['product'];
	$price = $_POST['price'];
    $discount = $_POST['discount'];
    $total = $price - $price*$discount/100;
	$id = $_POST['id'];

    $sql = 'UPDATE product SET Product = "'.$product.'", Price = "'.$price.'", Discount = "'.$discount.', Total = "'.$total.'" WHERE ID = '.$id.'';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
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
								echo "EDIT SUCCESS";
							}
							else {
								echo "FAILED TO EDIT";
							}
						?>
						</h2>
						<p align="center" class="mt-4 mb-0"><a href="show.php" class="btn btn-sm btn-success">BACK</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>