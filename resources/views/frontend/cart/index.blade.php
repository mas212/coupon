@extends('frontend.layout')

@section('content')
<!-- promo -->
<div class="col-md-12 fullPromo col-sm-12">
	<div class="container">
		<div class="row">
			<div class="col-md-12 detailProduct col-sm-12">
			     @foreach (Cart::content() as $item)
			     	<div class="cartName">
			     		cart
			     	</div>
			     @endforeach
			</div>
		</div>
	</div>
</div>
<!-- promo -->
@endsection