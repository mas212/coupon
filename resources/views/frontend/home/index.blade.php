@extends('frontend.layout')

@section('content')
	<!-- promo -->
<div class="col-md-12 fullPromo col-sm-12">
	<div class="container">
		<div class="row">
		    <div class="col-md-3 left">
		         <div class="categories">
		         	Kategori
		         </div>
		    	@foreach($categories as $category)
                    
                  	<div class="checkbox kategori-item">
          <input type="checkbox" id="kat-{{ $category->id }}" class="category checkbox-blue"  id="kat-{{ $category->id }}" value="{{ $category->id }}">
          <label for="kat-{{ $category->id }}"><span></span> {{ $category->name }}</label>
        </div>
                   @endforeach
		    </div>
			<div class="col-md-9 promo col-sm-12">
				<div class="promoTitle">
					Promo minggu ini
				</div>
				<div class="product-list-container" id="updateDiv">
					@foreach($products as $product)
					<div class="col-md-3 promoItems">
						<div class="promoItemContent" data-category="{{ $product->category->id }}">
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
</div>
<!-- promo -->
@endsection