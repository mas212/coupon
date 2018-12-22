@extends('frontend.layout')

@section('content')
<!-- promo -->
<div class="col-md-12 fullPromo col-sm-12">
	<div class="container">
		<div class="row">
			<div class="col-md-12 detailProduct col-sm-12">
			@if(isset($msg))
          		<div class="alert alert-info">{{$msg}}</div>
          	@endif
			<div class="alert alert-info" id="CartMsg"></div>
			     @foreach($data as $item)
			     <div class="col-md-12 cartBox">
			     	<div class="col-md-2 cartImage">
			     		<img src="{{ URL::asset('dropsipaja/images/produk-1.png') }}" alt="">
			     	</div>
			     	<div class="col-md-4 cartName">
			     		<div class="cartName">{{ $item->name }}</div>
			     	</div>
			     	<div class="col-md-3 cartQty">
			     		<input type="hidden" value="{{$item->rowId}}"
                                       id="rowID{{$item->id}}"/>
			     		<input type="number" max="10" min="1"
                                        value="{{$item->qty}}" class="qty-fill"
                                        id="upCart{{$item->id}}">
			     		<a class="cart-remove btn btn-success" >Update</a>
			     	</div>
			     	<div class="col-md-2 cartSubtotal">
			     		<div class="cartPrice">{{ $item->price }}</div>
			     	</div>
			     	<div class="col-md-1 cartSubtotal">
			     		<div class="cartAction">
                            <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                            	{{ csrf_field() }}
                            	{{ method_field('DELETE') }}
                            	<button type="submit" class="cart-options">
                            		<i class="fa fa-close"></i>
                            	</button>
                            </form>
			     		</div>
			     	</div>
			     </div>
			     @endforeach
			     <!-- start total -->
			     <div class="col-md-12 totalBox">
			     	<div class="col-md-offset-8 totalWrapper col-md-4">
			     		<div class="totalTitle">
			     			Total Amount
			     		</div>
			     		<div class="boxSubtotal">
			     			<span class="subtotalTitle">Subtotal</span>
			     			Rp.{{ Cart::subtotal() }}
			     		</div>
			     		<div class="boxTotal">
			     			<span class="total">Checkout</span>
			     			Rp {{ Cart::total() }} 
			     			<span class="boxChevron">
			     				<i class="fa fa-chevron-right" aria-hidden="true"></i>
			     			</span>

			     		</div>
			     	</div>
			     </div>
			     <!-- end total -->
			</div>
		</div>
	</div>
</div>
<!-- promo -->
@endsection