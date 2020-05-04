<div id="" class="loding-box"><div class="loding-image">Updating....Please Wait</div></div>
<div class="modal-header">
	<h5 class="modal-title" id="exampleModalCenterTitle">Electrical 3 phases</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<div class="modal-body">
  <form action="#">
  <div class="option-notice">
	<p class="war-dependency">* <strong>Electrical Phase 1</strong> with Value <strong>230 Volts</strong> a dependent characteristic.(1/2)</p>
	<br>
	<p>Select Option for Electrical Phase 2</p>
  </div>
	<!-- Group of default radios - option 1 -->
	<div class="custom-control custom-radio bottom-border">
	  <input type="radio" class="custom-control-input char-option-class" id="defaultGroupExample1" name="groupOfDefaultRadios" value="125">
	  <label class="custom-control-label bottom-border" for="defaultGroupExample1">520 Volts</label>
	</div>

	<!-- Group of default radios - option 2 -->
	<div class="custom-control custom-radio bottom-border">
	  <input type="radio" class="custom-control-input char-option-class has_depedenacy" id="defaultGroupExample2" name="groupOfDefaultRadios"  value="225">
	  <label class="custom-control-label" for="defaultGroupExample2">480 Volts</label>
	</div>

	<!-- Group of default radios - option 3 -->
	<div class="custom-control custom-radio bottom-border">
	  <input type="radio" class="custom-control-input char-option-class has_depedenacy" id="defaultGroupExample3" name="groupOfDefaultRadios" value="315">
	  <label class="custom-control-label" for="defaultGroupExample3">420 Volts</label>
	</div>
	
		<!-- Group of default radios - option 4 -->
	<div class="custom-control custom-radio bottom-border">
	  <input type="radio" class="custom-control-input char-option-class has_depedenacy" id="defaultGroupExample4" name="groupOfDefaultRadios" value="Price Included In Basice Machine">
	  <label class="custom-control-label" for="defaultGroupExample4">360 Volts</label>
	</div>
	
		<!-- Group of default radios - option 5 -->
	<div class="custom-control custom-radio bottom-border">
	  <input type="radio" class="custom-control-input char-option-class has_depedenacy" id="defaultGroupExample5" name="groupOfDefaultRadios" value="212">
	  <label class="custom-control-label" for="defaultGroupExample5">280 Volts</label>
	</div>
  </form>
</div>
<div class="differentiate-price-box">
  <span class="dp-label">Selected Option Price:</span>
  <span class="dp-value">-<?php echo(rand(10,100));?></span>
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
		<button type="button" class="btn btn-primary update_char_btn_next">Save & Next</button>
	</div>
</div>	

<script>

$(document).ready(function () {
$(".char-option-class").click(function () {
    var val = $('.char-option-class:checked').val();
    //alert(val);
	$('.dp-value').text(val);
});
});

/*
$(".update_char_btn_next").click(function(){
	 //$('.loding-box').show();
	  //$.wait(1000, function() {
   
		$.ajax({
		  url: "components/update_char_ajax.php",
		  success: function(result){
		$("#modal_result").html(result);
	  }});	
	//});
  
   //$('.loding-box').hide();
});
*/

$(".update_char_btn_next").click(function(){
	$('.loding-box').show();
	 $.wait(1000, function() {
   
		$.ajax({
		  url: "components/update_char_ajax.php",
		  success: function(result){
		$("#modal_result").html(result);
		$('.loding-box').hide();
		$(".modal").modal('hide');			 
			 $(".success-popup").show();
				$.wait(1000, function(){				
					$(".success-popup").hide();
			});
	  }});	
	});
	//$('.loding-box').hide();
	});
</script>