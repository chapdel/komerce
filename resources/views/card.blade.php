@extends('layouts.app')

@section('title', 'Shopping Cart')
@section('content')
    {{-- <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Cart</h2>
        </div>
    </section>
    <section class="section-content bg padding-y border-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif
                </div>
            </div>
            <div class="row">
                <main class="col-sm-9">
                    @if (\Cart::isEmpty())
                        <p class="alert alert-warning">Your shopping cart is empty.</p>
                    @else
                        <div class="card">
                            <table class="table table-hover shopping-cart-wrap">
                                <thead class="text-muted">
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" class="text-right" width="200">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(\Cart::getContent() as $item)
                                    <tr>
                                        <td>
                                            <figure class="media">
                                                <figcaption class="media-body">
                                                    <h6 class="title text-truncate">{{ Str::words($item->name,20) }}</h6>
                                                    @foreach($item->attributes as $key  => $value)
                                                        <dl class="dlist-inline small">
                                                            <dt>{{ ucwords($key) }}: </dt>
                                                            <dd>{{ ucwords($value) }}</dd>
                                                        </dl>
                                                    @endforeach
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td>
                                            <var class="price">{{ $item->quantity }}</var>
                                        </td>
                                        <td>
                                            <div class="price-wrap">
                                                <var class="price">{{ config('settings.currency_symbol'). $item->price }}</var>
                                                <small class="text-muted">each</small>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="{{ route('checkout.cart.remove', $item->id) }}" class="btn btn-outline-danger"><i class="fa fa-times"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </main>
                <aside class="col-sm-3">
                    <a href="#" class="btn btn-danger btn-block mb-4">Clear Cart</a>
                    <p class="alert alert-success">Add USD 5.00 of eligible items to your order to qualify for FREE Shipping. </p>
                    <dl class="dlist-align h4">
                        <dt>Total:</dt>
                        <dd class="text-right"><strong>{{ config('settings.currency_symbol') }}{{ \Cart::getSubTotal() }}</strong></dd>
                    </dl>
                    <hr>
                    <figure class="itemside mb-3">
                        <aside class="aside"><img src="{{ asset('frontend/images/icons/pay-visa.png') }}"></aside>
                        <div class="text-wrap small text-muted">
                            Pay 84.78 AED ( Save 14.97 AED ) By using ADCB Cards
                        </div>
                    </figure>
                    <figure class="itemside mb-3">
                        <aside class="aside"> <img src="{{ asset('frontend/images/icons/pay-mastercard.png') }}"> </aside>
                        <div class="text-wrap small text-muted">
                            Pay by MasterCard and Save 40%.
                            <br> Lorem ipsum dolor
                        </div>
                    </figure>
                    <a href="#" class="btn btn-success btn-lg btn-block">Proceed To Checkout</a>
                </aside>
            </div>
        </div>
    </section> --}}


<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
<div class="container">
	<h2 class="title-page">Shopping cart</h2>
</div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">

<div class="row">
	<main class="col-md-9">
        @if (\Cart::isEmpty())
                        <p class="alert alert-warning">Your shopping cart is empty.</p>
                    @else
<div class="card">

<table class="table table-borderless table-shopping-cart">
<thead class="text-muted">
<tr class="small text-uppercase">
  <th scope="col">Product</th>
  <th scope="col" width="120">Quantity</th>
  <th scope="col" width="120">Price</th>
  <th scope="col" class="text-right" width="200"> </th>
</tr>
</thead>
<tbody>
<tr>
	<td>
		<figure class="itemside">
			<div class="aside"><img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark">Some name of item goes here nice</a>
				<p class="text-muted small">Size: XL, Color: blue, <br> Brand: Gucci</p>
			</figcaption>
		</figure>
	</td>
	<td>
		<select class="form-control">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
		</select>
	</td>
	<td>
		<div class="price-wrap">
			<var class="price">$1156.00</var>
			<small class="text-muted"> $315.20 each </small>
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right">
	<a href="" class="btn btn-light"> Remove</a>
	</td>
</tr>
<tr>
	<td>
		<figure class="itemside">
			<div class="aside"><img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/2.jpg" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark">Product name  goes here nice</a>
				<p class="text-muted small">Size: XL, Color: blue, <br> Brand: Gucci</p>
			</figcaption>
		</figure>
	</td>
	<td>
		<select class="form-control">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
		</select>
	</td>
	<td>
		<div class="price-wrap">
			<var class="price">$149.97</var>
			<small  class="text-muted"> $75.00 each </small>
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right">
	<a href="" class="btn btn-light btn-round"> Remove</a>
	</td>
</tr>
<tr>
	<td>
		<figure class="itemside">
			<div class="aside"><img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/3.jpg" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark">Another name of some product goes just here</a>
				<p class="small text-muted">Size: XL, Color: blue,  Brand: Tissot</p>
			</figcaption>
		</figure>
	</td>
	<td>
		<select class="form-control">
			<option>1</option>
			<option>2</option>
			<option>3</option>
		</select>
	</td>
	<td>
		<div class="price-wrap">
			<var class="price">$98.00</var>
			<small class="text-muted"> $578.00 each</small>
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right">
		<a href="" class="btn btn-light btn-round"> Remove</a>
	</td>
</tr>
</tbody>
</table>

<div class="card-body border-top">
	<a href="#" class="btn btn-primary float-md-right"> Make Purchase <i class="fa fa-chevron-right"></i> </a>
	<a href="{{route('home')}}" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continue shopping </a>
</div>
</div> <!-- card.// -->
                    @endif



	</main> <!-- col.// -->
	<aside class="col-md-3">
		<div class="card">
			<div class="card-body">
					<dl class="dlist-align">
					  <dt>Total price:</dt>
					  <dd class="text-right">USD 0</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Discount:</dt>
					  <dd class="text-right">USD 0</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Total:</dt>
					  <dd class="text-right  h5"><strong>$0</strong></dd>
					</dl>
					<hr>
					<p class="text-center mb-3">
						<img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/misc/payments.png" height="26">
					</p>

			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
	</aside> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>

@stop
