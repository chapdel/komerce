@extends('layouts.app')

@section('title', 'Pruct details')
@section('content')
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-md-11">
            <div class="card">
	<div class="row no-gutters">
		<aside class="col-sm-6 border-right">
<article class="gallery-wrap">
	<div class="img-big-wrap">
	   <a href="#"><img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/3.jpg"></a>
	</div> <!-- img-big-wrap.// -->
	<div class="thumbs-wrap">
	  <a href="#" class="item-thumb"> <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg"></a>
	  <a href="#" class="item-thumb"> <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg"></a>
	  <a href="#" class="item-thumb"> <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/3.jpg"></a>
	  <a href="#" class="item-thumb"> <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/4.jpg"></a>
	</div> <!-- thumbs-wrap.// -->
</article> <!-- gallery-wrap .end// -->
		</aside>
		<main class="col-sm-6">
<article class="content-body">
	<h2 class="title">Great demo product name</h2>

	<p>Here goes description consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris.</p>
	<ul class="list-normal cols-two">
		<li>Not just for commute </li>
		<li>Branded tongue and cuff </li>
		<li>Super fast and amazing </li>
		<li>Lorem sed do eiusmod tempor </li>
		<li>Easy fast and ver good </li>
		<li>Lorem sed do eiusmod tempor  </li>
	</ul>

<div class="h3 mb-4">
	<var class="price h4">$815.00</var>
</div> <!-- price-wrap.// -->

<div class="form-row">
	<div class="col-2">
		<select class="form-control">
	  		<option> 1 </option>
	  		<option> 2 </option>
	  		<option> 3 </option>
	  	</select>
	</div> <!-- col.// -->
	<div class="col-2">
		<select class="form-control">
	  		<option> Size </option>
	  		<option> XL </option>
	  		<option> MD </option>
	  		<option> XS </option>
	  	</select>
	</div> <!-- col.// -->
	<div class="col">
		<a href="#" class="btn  btn-primary w-100"> Add to cart <i class="fas fa-shopping-cart"></i>  </a>
	</div> <!-- col.// -->
	<div class="col">
		<a href="#" class="btn  btn-light"> <i class="fas fa-heart"></i>  </a>
	</div> <!-- col.// -->
</div> <!-- row.// -->

</article> <!-- product-info-aside .// -->
		</main> <!-- col.// -->
	</div> <!-- row.// -->
</div>
        </div>
    </div>
</div>
@stop
