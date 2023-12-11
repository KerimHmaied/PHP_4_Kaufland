<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Your Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view.php">View Data</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="empty.php">Empty Data</a>
            </li>
            
          </ul>
        </div>
  </nav>

	<?php
	include('config.php');
	?>
	<div class="col-md-12 table-responsive" style="max-height: 700px;">

<table class="table table-bordered table-striped">
	<tr>
		<th>Entity ID</th>
		<th>Category Name</th>
		<th>SKU</th>
		<th>Name</th>
		<th>Description</th>
		<th>Short Desc</th>
		<th>Price</th>
		<th>Link</th>
		<th>image</th>
		<th>Brand</th>
		<th>Rating</th>
		<th>Caffeine Type</th>
		<th>Count</th>
		<th>Flavored</th>
		<th>Seasonal</th>
		<th>Instock</th>
		<th>Facebook</th>
		<th>isKCup</th>
	</tr>
	<?php 
	$result = mysqli_query($conn, "SELECT * FROM xml_feed ");
	while($row = mysqli_fetch_object($result))
	{
		print "<tr>
			<td>$row->entity_id</td>
			<td>$row->categoryName</td>
			<td>$row->sku</td>
			<td>$row->name</td>
			<td>$row->description</td>
			<td>$row->shortdesc</td>
			<td>$row->price</td>
			<td>$row->link</td>
			<td><img src='$row->image' widht='25' height='25'></td>
			<td>$row->brand</td>
			<td>$row->rating</td>
			<td>$row->caffeineType</td>
			<td>$row->count</td>
			<td>$row->flavored</td>
			<td>$row->seasonal</td>
			<td>$row->instock</td>
			<td>$row->facebook</td>
			<td>$row->isKCup</td>
		</tr>";
	}
	?>
</table>
</div>
</body>
</html>