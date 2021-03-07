<!DOCTYPE html>
<html>
<head>
	<title>add product</title>
	<!-- //bootstrap css link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h1 class="mb-3">Add Product Form</h1>
	<form method="post" enctype="multipart/form-data" action="">
		<div class="col-md-6">
			<label for="productname">Product Name</label>
			<input type="text" class="form-control" name="pname" placeholder="enter productname" id="inputProductName">			
		</div>
		<div class="col-md-6">
			<label for="price">Product Price</label>
			<input type="number" class="form-control" name="price" placeholder="enter price">

		</div>
		<div class="col-md-6">
			<label for="quantity">Product Quantity</label>
			<input type="number" name="quantity" class="form-control">
		</div>
		<div class="col-md-6">
			<label for="description">Description</label>
			<textarea name="description" class="form-control"></textarea>
		</div>
		<div class="col-md-6">
			<label for="image">Product Image</label>
			<input type="file" name="image" class="form-control">
		</div>
		<div class="col-md-6">
			<button type="submit" class="btn btn-primary">Add Product</button>
		</div>
	</form>
</div>
</body>
</html>
<!-- post vaneko security high hunxa
image ko file read garna ko lagi = entype="(multipa.....)" rakhne
action = to insert data  -->