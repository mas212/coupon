@extends('frontend.layout')

@section('content')
	<!-- promo -->
<div class="col-md-12 fullPromo col-sm-12">
	<div class="container">
		<div class="row">
		    <div class="col-md-3 left">
		    	<ul>
		    		@foreach($products as $product)
		    		<li  class="brandLi">
		    			<input type="checkbox" id="brandId" value="{{ $product->id }}" class="try">
		    			{{ ucwords($product->price) }}
		    		</li>
		    		@endforeach
		    	</ul>
		    </div>
			<div class="col-md-9 promo col-sm-12" id="updateDiv">
				<div class="promoTitle">
					Promo minggu ini
				</div>
				@foreach($products as $product)
				<div class="col-md-3 promoItems">
					<div class="promoItemContent">
						<div class="promoItemImg">
							<a href="{{ route('product-detail', $product->slug) }}">
								<img src="{{ URL::asset('dropsipaja/images/produk-1.png') }}" alt="">	
							</a>
						</div>
						<div class="promoProductTitle">
							{{ $product->name }}
						</div>
						<div class="promoProductContent">
							Mulai dari <span class="pricePublish">
								Rp. 90.000
							</span>Rp.<span class="pricePromoProduct">{{ $product->presentPrice() }}</span>/kaos
						</div>
					</div>
				</div>
				<!-- end -->
			@endforeach
			</div>
		</div>
	</div>
</div>
<!-- promo -->
@endsection