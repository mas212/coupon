@extends('frontend.layout')

@section('content')
<!-- promo -->
<div class="col-md-12 fullPromo col-sm-12">
	<div class="container">
		<div class="row">
			<div class="col-md-12 detailProduct col-sm-12">
			     @foreach($data as $item)
			     	<div class="cartName">{{ $item->name }}</div>
			     	<div class="cartPrice">{{ $item->price }}</div>
			     	<div class="cartPrice">
			     		<input type="text" value="{{ $item->qty }}">
			     	</div>
			     	<div class="cartSubtotal">{{ Cart::subtotal() }}</div>
			     @endforeach
			</div>
		</div>
	</div>
</div>
<!-- promo -->
@endsection