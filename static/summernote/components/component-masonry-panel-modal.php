<!-- reuire css for mansory effect for grid panel -->

<!-- Grid Layout for Mansory effects start Here -->
<div class="container">
	<div class="grid">
	  <div class="grid-item grid-item--width3">
		<div class="product-image">
			<img src="images/product/default/sample-product-img-packing.jpg" class="masonry-image"/>
		</div>
		<div class="product-desc">
			<h3  class="product-title" ><strong>FBE X.ONE</strong></h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
			</p>
		</div>	
	  </div>
	  <div class="grid-item">
		<div>
			<h4 class="group-title">Machine Selection</h4>
			<div class="group-list-grid">
			<ul class="list-group">
				<li>
					<a class="list-group-item list-group-item-action" data-toggle="modal" data-target="#exampleModalCenter" ><span class="list-char-left">Power Supply</span><span class="list-char-right">380 V</span></a>
					<!-- Start Main Modal -->
					<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalCenterTitle">Power Supply</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
							  <form action="#">
							  <div class="option-notice">
								<p>Select Option </p>
							  </div>
								<!-- Group of default radios - option 1 -->
								<div class="custom-control custom-radio bottom-border">
								  <input type="radio" class="custom-control-input char-option-class" id="defaultGroupExample1" name="groupOfDefaultRadios" onclick="getRadioButtonValue(id.this)" value="5300">
								  <label class="custom-control-label bottom-border" for="defaultGroupExample1">320 V</label>
								</div>

								<!-- Group of default radios - option 2 -->
								<div class="custom-control custom-radio bottom-border">
								  <input type="radio" class="custom-control-input char-option-class has_depedenacy" id="defaultGroupExample2" name="groupOfDefaultRadios" checked value="2500">
								  <label class="custom-control-label" for="defaultGroupExample2">415 V</label>
								</div>

								<!-- Group of default radios - option 3 -->
								<div class="custom-control custom-radio bottom-border">
								  <input type="radio" class="custom-control-input char-option-class has_depedenacy" id="defaultGroupExample3" name="groupOfDefaultRadios" value="2500">
								  <label class="custom-control-label" for="defaultGroupExample3">480 V</label>
								</div>
								<!-- Group of default radios - option 4 -->
								<div class="custom-control custom-radio bottom-border">
								  <input type="radio" class="custom-control-input char-option-class" id="defaultGroupExample4" name="groupOfDefaultRadios" value="7400">
								  <label class="custom-control-label" for="defaultGroupExample4">600 V</label>
								</div>
							  </form>
						  </div>
						  <div class="differentiate-price-box">
							  <span class="dp-label">Selected Option Price:</span>
							  <span class="dp-value">4500</span>
						  </div>
						  <div class="modal-footer">
							  <div class="col-md-8">
									<div class="animated-checkbox">
									  <label>
										<input type="checkbox" class="form-check-input"><span class="label-text"> Show Selection as Optional Spare Part in Quotation</span>
									  </label>
									</div>
								</div>
								<div class="col-md-4">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#depedantModal" data-dismiss="modal" >Update</button>
								</div>
						  </div>
						</div>
					  </div>
					</div>
					<!-- End Main Modal -->		
					<!-- Start Dependant Modal -->
					<div class="modal fade" id="depedantModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalCenterTitle">Light Sensor</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
							  <form action="#">
							  <div class="option-notice">
								<p>Select Option </p>
							  </div>
								<!-- Group of default radios - option 1 -->
								<div class="custom-control custom-radio bottom-border">
								  <input type="radio" class="custom-control-input char-option-class" id="dependant_option_1" name="groupOfDefaultRadios" onclick="getRadioButtonValue(id.this)" value="5300">
								  <label class="custom-control-label bottom-border" for="dependant_option_1">EMB Sensor</label>
								</div>

								<!-- Group of default radios - option 2 -->
								<div class="custom-control custom-radio bottom-border">
								  <input type="radio" class="custom-control-input char-option-class" id="dependant_option_2" name="groupOfDefaultRadios" value="2500">
								  <label class="custom-control-label" for="dependant_option_2">White Board Sensor</label>
								</div>

								<!-- Group of default radios - option 3 -->
								<div class="custom-control custom-radio bottom-border">
								  <input type="radio" class="custom-control-input char-option-class" id="dependant_option_3" name="groupOfDefaultRadios" value="2500">
								  <label class="custom-control-label" for="dependant_option_3">STD SENS B </label>
								</div>
							  </form>
						  </div>
						  <div class="differentiate-price-box">
							  <span class="dp-label">Selected Option Price:</span>
							  <span class="dp-value">4500</span>
						  </div>
						  <div class="modal-footer">
							  <div class="col-md-8">
									<div class="animated-checkbox">
									  <label>
										<input type="checkbox" class="form-check-input"><span class="label-text"> Show Selection as Optional Spare Part in Quotation</span>
									  </label>
									</div>
								</div>
								<div class="col-md-4">
									<button type="button" class="btn btn-primary">Update</button>
								</div>
						  </div>
						</div>
					  </div>
					</div>
					<!-- End Dependant Modal -->							
				</li>
				<li><a class="list-group-item list-group-item-action" href="#"><span class="list-char-left">Electric Supply</span><span class="list-char-right">240 V</span></a></li>
				<li><a class="list-group-item list-group-item-action" href="#"><span class="list-char-left">Power Heater</span><span class="list-char-right">HQNS</span></a></li>
				<li><a class="list-group-item list-group-item-action" href="#"><span class="list-char-left">Temp Sensor</span><span class="list-char-right">3Ums</span></a></li>
				<li><a class="list-group-item list-group-item-action" href="#"><span class="list-char-left">Controller</span><span class="list-char-right">Double Sensor</span></a></li>
			</ul>
			</div>
		</div>
	  </div>
	  <div class="grid-item">
		<div class="group-list-grid">
				<ul class="list-nav">
					<li class="char-item">
						<a>Power Supply</a>
					</li>
					<li class="char-item"><a href="#">Electric Supply</a></li>
					<li class="char-item"><a href="#">Power Heater</a></li>
					<li class="char-item"><a href="#">Temp Sensor</a></li>
					<li class="char-item"><a href="#">Controller</a></li>
				</ul>
			</div>
	  </div>
	  <div class="grid-item"></div>
	  <div class="grid-item grid-item--width2 grid-item--height2"></div>
	  <div class="grid-item grid-item--width3">  
	  </div>
	  <div class="grid-item grid-item--width2"></div>
	  <div class="grid-item grid-item--height2"></div>
	  <div class="grid-item"></div>
	  <div class="grid-item grid-item--width2"></div>
	  <div class="grid-item grid-item--height2"></div>
	  <div class="grid-item"></div>
	  <div class="grid-item"></div>
	</div>
</div>
<!-- Grid Layout for Mansory effects End Here -->
<!-- Script for mansory effects -->
<!--<script src='components/js/masonry.pkgd.min.js'></script>-->
<script src='http://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js'></script>
<script>

$('.grid').isotope({
  itemSelector: '.grid-item',
  masonry: {
    columnWidth: 260,
	gutter:15
  }
});
</script>

<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

$('#myModal').on('hidden.bs.modal', function () {
  // Load up a new modal...
  $('#myModalNew').modal('show')
})
</script>

<script>
/*
if (document.getElementById('r1').checked) {
  rate_value = document.getElementById('r1').value;
}*/

function getRadioButtonValue()
{
	rate_value = document.getElementById(defaultGroupExample1).value;
	alert(rate_value);
}

$(document).ready(function () {
$(".char-option-class").change(function () {

    var val = $('.char-option-class:checked').val();
    //alert(val);
	$('.dp-value').text(val);
});
});
</script>