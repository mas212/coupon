@extends('frontend.layout')

@section('content')
<!-- promo -->
<div class="col-md-12 fullPromo col-sm-12">
	<div class="container">
		<div class="row">
			<div class="col-md-12 detailProduct col-sm-12">
			     <div class="col-md-6 product_left">
			     	<img src="{{ URL::asset('dropsipaja/images/produk-1.png') }}" alt="">
			     </div>
			     <div class="col-md-6 product_right">
			     	<div class="detailProductTitle">
			     		{{ $product->name }}
			     	</div>
			     	<div class="detailProductPrice">
			     		Rp.{{ $product->presentPrice() }}
			     	</div>
			     	<div class="detailProductDescription">
			     		{{ $product->description }}
			     	</div>
			     	<div class="detailProductBtn">
		                <a href="{{url('/cart/add')}}/{{$product->id}}">
		                	Add tocart
		                </a>
			     	</div>
			     </div>
			</div>
		</div>
	</div>
</div>
<!-- promo -->
@endsection