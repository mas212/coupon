@extends('frontend.layout')

@section('content')
<!-- promo -->
<div class="col-md-12 fullPromo col-sm-12">
	<div class="container">
		<div class="row">
			<div class="col-md-12 checkout col-sm-12">
				<form action="{{url('/placeOrder')}}" method="POST">
					<input type="hidden" value="{{csrf_token()}}" name="_token"/>
					<h3 class="text-center">Payment</h3>
					  <div class="form-group">
					        <div class="col-md-6">
					            <!-- First name -->
					            <input type="text"  class="form-control" placeholder="Full name" name="fullname" 
					            value="{{Auth::user()->name}}">
					            <span style="color:red">{{ $errors->first('fullname') }}</span>
					            <br>  <br>
					            <input type="email"  class="form-control" placeholder="Email" name="email"
					            value="{{Auth::user()->email}}">
					            <span style="color:red">{{ $errors->first('email') }}</span>
					            <br>  <br>
					            <input type="text"  class="form-control" placeholder="Phone number" name="phone">
					            <span style="color:red">{{ $errors->first('phone') }}</span>
					            <br>  <br>
					            <input type="text"  class="form-control" placeholder="City name" name="city">
					            <span style="color:red">{{ $errors->first('city') }}</span>
					        </div>
					        <div class="col-md-6">
					            <!-- Last name -->
					            <input type="text"  class="form-control" placeholder="State" name="state">
					            <span style="color:red">{{ $errors->first('state') }}</span>
					            <br>  <br>
					            <input type="text"  class="form-control" placeholder="Country" name="country">
					            <span style="color:red">{{ $errors->first('country') }}</span>
					            <br>  <br>
					            <textarea  class="form-control" rows="5" placeholder="Full Address"
					             name="fullAddress"></textarea>
					             <span style="color:red">{{ $errors->first('fullAddress') }}</span>
					        </div>
					        <div class="col-md-12 buttonSave">
					        	<button class="btn btn-red btn-bigger btn-checkout finish-checkout" type="submit">
			                      Payment  &raquo;
			                    </button>
					        </div>      
					    </div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- promo -->
@endsection