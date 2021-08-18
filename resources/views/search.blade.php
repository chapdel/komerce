@extends('layouts.app')

@section('title', 'Search')
@section('content')
<div class="container">

<header class="border-bottom my-3 pb-3">
		<div class="form-inline">
			<span class="mr-md-auto">32 Items found </span>
			<select class="mr-2 form-control">
				<option>Latest items</option>
				<option>Trending</option>
				<option>Most Popular</option>
				<option>Cheapest</option>
			</select>
		</div>
</header><!-- sect-heading -->
   <div class="row">
	<div class="col-md-3">
		<div href="#" class="card card-product-grid">
			<a href="#" class="img-wrap"> <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg"> </a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Just another product name</a>

				<div class="rating-wrap">
					<ul class="rating-stars">
						<li style="width:80%" class="stars-active">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						</li>
						<li>
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						</li>
					</ul>
					<span class="label-rating text-muted"> 34 reviws</span>
				</div>
				<div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                <a href="#" class="btn btn-primary btn-sm btn-block"> Add to cart </a>
			</figcaption>
		</div>
	</div> <!-- col.// -->
	<div class="col-md-3">
		<div href="#" class="card card-product-grid">
			<a href="#" class="img-wrap"> <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg"> </a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Some item name here</a>

				<div class="rating-wrap">
					<ul class="rating-stars">
						<li style="width:80%" class="stars-active">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						</li>
						<li>
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						</li>
					</ul>
					<span class="label-rating text-muted"> 34 reviws</span>
				</div>
				<div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
                <a href="#" class="btn btn-primary btn-sm btn-block"> Add to cart </a>
			</figcaption>
		</div>
	</div> <!-- col.// -->
	<div class="col-md-3">
		<div href="#" class="card card-product-grid">
			<a href="#" class="img-wrap"> <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/3.jpg"> </a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Great product name here</a>

				<div class="rating-wrap">
					<ul class="rating-stars">
						<li style="width:80%" class="stars-active">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						</li>
						<li>
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						</li>
					</ul>
					<span class="label-rating text-muted"> 34 reviws</span>
				</div>
				<div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
                <a href="#" class="btn btn-primary btn-sm btn-block"> Add to cart </a>
			</figcaption>
		</div>
	</div> <!-- col.// -->
	<div class="col-md-3">
		<div href="#" class="card card-product-grid">
			<a href="#" class="img-wrap"> <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/4.jpg"> </a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Just another product name</a>

				<div class="rating-wrap">
					<ul class="rating-stars">
						<li style="width:80%" class="stars-active">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						</li>
						<li>
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						</li>
					</ul>
					<span class="label-rating text-muted"> 34 reviws</span>
				</div>
				<div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                <a href="#" class="btn btn-primary btn-sm btn-block"> Add to cart </a>
			</figcaption>
		</div>
	</div> <!-- col.// -->
</div> <!-- row.// -->



<nav class="mt-4" aria-label="Page navigation sample">
  <ul class="pagination">
    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>
@stop
