<!-- start income after join -->
<div class="col-md-12 fullFooter col-sm-12">
	<div class="container">
		<div class="row">
			<div class="col-md-12 footer col-sm-12">
				<div class="col-md-3 footerItems">
					<div class="footerItemWrapper">
						<h3>Produk</h3>
						<ul>
							<li><a href="#">Custome kaos</a></li>
							<li><a href="#">Custome power bank</a></li>
							<li><a href="#">Custome card</a></li>
							<li><a href="#">Custome case</a></li>
						</ul>
					</div>
				</div>
				<!-- end -->
				<div class="col-md-3 footerItems">
					<div class="footerItemWrapper">
						<h3>Dropshiper</h3>
						<ul>
							<li><a href="#">Quick order</a></li>
							<li><a href="#">Panduan</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Tentang kami</a></li>
						</ul>
					</div>
				</div>
				<!-- end -->
				<div class="col-md-3 footerItems">
					<div class="footerItemWrapper">
						<h3>Dropshipaja.com</h3>
						<ul>
							<li>Phone : +6281338183441</li>
							<li>Whatsapp : +6281338183441</li>
							<li>Email : help@dropshipaja.com</li>
						</ul>
						<div class="footerSosmed">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end -->
				<div class="col-md-3 footerItems">
					<div class="footerItemWrapper">
						<h3>Kami menerima</h3>
						<div class="footerBank">
							<ul>
								<li><img src="{{ URL::asset('dropsipaja/images/bca.png') }}"></li>
								<li><img src="{{ URL::asset('dropsipaja/images/mandiri.png') }}"></li>
								<li><img src="{{ URL::asset('dropsipaja/images/visa.png') }}"></li>
								<li><img src="{{ URL::asset('dropsipaja/images/master.png') }}"></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end -->
				<div class="col-md-12 copyRight">
					 All Rights Reserved &copy; 2018 Dropshipaja.com | Jl.Pasar minggu - Jakarta Selatan - Indonesia | Tentang dropshipaja.com
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end join -->
<script src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
<script>
   var $ = jQuery;
   jQuery(document).ready(function($){
    @foreach($data as $item)
    $("#upCart{{$item->id}}").on('change keyup', function(){
      var newQty = $("#upCart{{$item->id}}").val();
      var rowID = $("#rowID{{$item->id}}").val();
      $.ajax({
          url:'{{url('/cart/update')}}',
          data:'rowID=' + rowID + '&newQty=' + newQty,
          type:'get',
          success:function(response){
            $("#CartMsg").show();
            //console.log(response);
            $("#CartMsg").html(response);
          }
      });
    });
    @endforeach 
  });
  </script>
</body>
</html>