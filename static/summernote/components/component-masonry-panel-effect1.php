<!-- reuire css for mansory effect for grid panel -->

<!-- Grid Layout for Mansory effects start Here -->
<div class="container container1">
  <div class="grid-sizer"></div>
  <div class="gutter-sizer"></div>
	<div class="item" href="#">
		<h3>Product Image</h3>
		<div class="">
			<img src="images/product/default/sample-product-img-packing.jpg">
		</div>
  </div>
  <div class="item" href="#">
    <h3>Group Title</h3>
    <p>Group Description</p>
   <div class="" style="height:250px"></div>	
  </div>
  <div class="item" href="#">
    <h3>Group Title</h3>
    <p>Group Description</p>
	<div class="" style="height:280px"></div>
  </div>
  <div class="item" href="#">
    <h3>Group Title</h3>
    <p>Group Description</p>	
	<div class="" style="height:70px"></div>
  </div>
  <div class="item" href="#">
    <h3>Group Title</h3>
    <p>Group Description</p>
	<div class="" style="height:120px"></div>
  </div>
  <div class="item" href="#">
    <h3>Group Title</h3>
    <p>Group Description</p>
	<div class="" style="height:200px"></div>
  </div>
  <div class="item" href="#">
    <h3>Group Title</h3>
    <p>Group Description</p>
	<div class="" style="height:150px"></div>
  </div>
    <div class="item" href="#">
    <h3>Group Title</h3>
    <p>Group Description</p>
	<div class="" style="height:450px"></div>
  </div>
    <div class="item" href="#">
    <h3>Group Title</h3>
    <p>Group Description</p>
	<div class="" style="height:200px"></div>
  </div>
  <div class="item" href="#">
    <h3>Group Title</h3>
    <p>Group Description</p>
	<div class="" style="height:300px"></div>
  </div>
    <div class="item" href="#">	
	<div class="" style="height:70px;padding 15px;">
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
	</div>
  </div>
</div>

<!-- Grid Layout for Mansory effects End Here -->
<!-- Script for mansory effects -->
<script src='components/js/masonry.pkgd.min.js'></script>
<script>
$(window).on('load', function() {
  
  $('.container1').masonry({
    columnWidth : '.grid-sizer',
    gutter : 30,
    itemSelector : '.item',
    percentPosition : 'true',
    fitWidth: true,
  });
  
});
</script>