<!DOCTYPE html>
<html>
<head>
	<title>Update product Form</title>
	<!-- //bootstrap css link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h1 class="mb-3">Update Product Form</h1>
    @if(Session::has('msg'))
    <div class="alert alert-success">
    	{{Session::get('msg')}}
    </div>
    @endif

	<form method="post" enctype="multipart/form-data" action="">
		@csrf
		<div class="col-md-6">
			<label for="productname">Product Name</label>
			<input type="text" class="form-control" name="pname" placeholder="enter productname" id="inputProductName" value="{{$product->product_name}}">			
		</div>
		<div class="col-md-6">
			<label for="price">Product Price</label>
			<input type="number" class="form-control" name="price" placeholder="enter price" value="{{$product->product_price}}">

		</div>
		<div class="col-md-6">
			<label for="quantity">Product Quantity</label>
			<input type="number" name="quantity" class="form-control" value="{{$product->product_quantity}}">
		</div>
		<div class="col-md-6">
			<label for="description">Description</label>
			<textarea name="description" class="form-control">{{$product->product_description}}</textarea>
		</div>
		<div class="col-md-6">
			<label for="image">Product Image</label>
			<input type="file" name="image" class="form-control">
			<img src="{{asset('uploads/products')}}/{{$product->product_image}}" width="50">
		</div>
		<div class="col-md-6">
			<button type="submit" class="btn btn-primary">Update Product</button>
		</div>
	</form>
</div>
</body>
</html>
<!-- post vaneko security high hunxa
image ko file read garna ko lagi = entype="(multipa.....)" rakhne
action = to insert data  -->