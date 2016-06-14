<?php var_dump($product['price']) ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit Product | Semi-Restful Routes</title>

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

			<h2>Edit <?php echo htmlspecialchars($product['name']); ?></h2>
			
			<form action="/products/edit_product/<?php echo htmlspecialchars($product['id']); ?>" method="post">
				<fieldset class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" name="name" id="name" value="<?php echo htmlspecialchars($product['name']); ?>">
				</fieldset>
				<fieldset class="form-group">
				    <label for="name">Description</label>
				    <input type="text" class="form-control" name="description" id="description" value="<?php echo htmlspecialchars($product['description']); ?>">
				</fieldset>
				<fieldset class="form-group">
				    <label for="name">Price</label>
				    <input type="text" class="form-control" name="price" id="price" value="<?php echo htmlspecialchars($product['price']); ?>">
				</fieldset>
	
		  		<button type="submit" class="btn btn-primary">Submit</button>
		  		<!-- <input type="hidden" name="message-id" value="<?php echo $id?>"></input> -->
			</form>

			<a href="products/productinfo">Show</a> | <a href="/">Back</a>

		</div>

	</body>
</html>