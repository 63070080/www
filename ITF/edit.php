<?php
	$conn = mysqli_connect('data-tanapong.mysql.database.azure.com', 'nutgod@data-tanapong', 'nut7godalot9?', 'ITFLab');

	$id = $_GET['Id'];

	$sql = 'SELECT * FROM product WHERE ID = '.$id.'';
	$query = mysqli_query($conn, $sql);
	if(!$query) {
		header('Location: index.php');
	}
	else {
		$data = mysqli_fetch_assoc($query);
	}
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
						<div class="row">
							<div class="col-6"><h1 class="text-monospace">Edit</h1></div>
						</div>
						<form action="update.php" method="post">
							<input type="text" name="id" value="<?php echo $data['Id']; ?>" class="form-control d-none" required>
							<div class="form-group">
								<label>Price</label>
								<textarea name="price" class="form-control" rows="5" required><?php echo $data['Price']; ?></textarea>
							</div>
							<div class="form-group">
								<label>Discount</label>
								<input type="text" name="discount" value="<?php echo $data['Discount']; ?>" class="form-control">
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-sm btn-success my-3 font-weight-bold">SAVE</button>
								<a class="btn btn-sm btn-light my-3" href="show.php">CANCEL</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>