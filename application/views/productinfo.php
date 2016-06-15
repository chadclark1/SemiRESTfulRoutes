<?php var_dump($product) ?>

<!DOCTYPE html>
<html>
	<head>
		<title>All Products | Semi-Restful Routes</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="assets/style.css">

	</head>
	<body>
		<header>
			<nav class="navbar navbar-light bg-faded">
				<h1 class="navbar-brand">Semi-Restful Routes</h1>
			</nav>
		</header>
		<div class="container">
			<h2>Product: <?php echo htmlspecialchars($product['name']); ?></h2>
			<div class="product col-md-11 col-md-offset-1">
				<h4 class="col-md-3">Name:</h4>
				<p class="col-md-7"><?php echo htmlspecialchars($product['name']); ?></p>
			</div>
			<div class="product col-md-11 col-md-offset-1">
				<h4 class="col-md-3">Description:</h4>
				<p class="col-md-7"><?php echo htmlspecialchars($product['description']); ?></p>
			</div>
			<div class="product col-md-11 col-md-offset-1">
				<h4 class="col-md-3">Price:</h4>
				<p class="col-md-7"><?php echo htmlspecialchars($product['price']); ?></p>
			</div>
			<div><a href="/products/edit/<?php echo $product['id'] ?>">Edit</a> | <a href="/">Back</a>
			</div>
		</div>
	</body>
</html>
