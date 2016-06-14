<?php  ?>

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

			<h2>Add a Product</h2>
			
			<form action="/products/add" method="post">
				<fieldset class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" name="name" id="name" placeholder="name">
				</fieldset>
				<fieldset class="form-group">
				    <label for="name">Description</label>
				    <input type="text" class="form-control" name="description" id="description" placeholder="description">
				</fieldset>
				<fieldset class="form-group">
				    <label for="name">Price</label>
				    <input type="text" class="form-control" name="price" id="price" placeholder="price">
				</fieldset>
	
		  		<button type="submit" class="btn btn-primary">Create</button>
		  		<!-- <input type="hidden" name="message-id" value="<?php echo $id?>"></input> -->
			</form>

			<a href="/">Go Back</a>

		</div>

	</body>
</html>