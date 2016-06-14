<?php
 // var_dump($products);
  ?>

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
			<div class="products col-md-10">
				<h2>Products</h2>
				
				<table class="table table-striped">
					<thead>
						<th>Name</th>
						<th>Description</th>
						<th>Price</th>
						<th>Actions</th>
					</thead>
					
 <?php 
 // var_dump($products); 
 	foreach ($products as $product) {
 	?>	
 					<tr>
 						<td class="col-md-3 data"><?php echo $product['name'] ?></td>
 						<td class="col-md-4 data"><?php echo $product['description'] ?></td>
 						<td class="col-md-2 data"><?php echo $product['price'] ?></td>
 						<td class="col-md-4 data buttons">
							<a href="/products/show/<?php echo $product['id'] ?>" class="col-md-3">Show</a>
							<a href="/products/edit/<?php echo $product['id'] ?>" class="col-md-3">Edit</a>
							<a href="/products/delete/<?php echo $product['id'] ?>" class="btn btn-primary">Remove</a>
						</td>
					</tr>
 <?php
 	}

 ?>



					
				</table>
				<a href="/products/new_product">Add a Product</a>
			</div>
		</div>
	</body>
</html>