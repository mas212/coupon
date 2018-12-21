@extends('frontend.layout')

@section('content')
<!-- promo -->
<div class="col-md-12 fullPromo col-sm-12">
	<div class="container">
		<div class="row">
			<div class="col-md-12 detailProduct col-sm-12">
			     @foreach($data as $item)
			     <div class="col-md-12 cartBox">
			     	<div class="col-md-2 cartImage">
			     		<img src="{{ URL::asset('dropsipaja/images/produk-1.png') }}" alt="">
			     	</div>
			     	<div class="col-md-4 cartName">
			     		<div class="cartName">{{ $item->name }}</div>
			     	</div>
			     	<div class="col-md-3 cartQty">
			     		<input type="text" value="{{ $item->qty }}">
			     	</div>
			     	<div class="col-md-2 cartSubtotal">
			     		<div class="cartPrice">{{ $item->price }}</div>
			     	</div>
			     	<div class="col-md-1 cartSubtotal">
			     		<div class="cartAction">
			     			<a href="#">
			     				<i class="fa fa-close"></i>
			     			</a>
			     		</div>
			     	</div>
			     </div>
			     @endforeach
			</div>
		</div>
	</div>
</div>
<!-- promo -->
@endsection