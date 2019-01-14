@foreach($products as $product)
<div data-category="{{ $product->category->id }}">
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
</div>
@endforeach