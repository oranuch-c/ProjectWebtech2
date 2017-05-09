<!DOCTYPE html>
<html lang="en">
  @include('layouts._head')
<body>
  @include('layouts._navadmin')
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a href="/manage-vue"><img style="width:100%" src="themes/images/carousel/1.png" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="/manage-vue"><img style="width:100%" src="themes/images/carousel/2.png" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="/manage-vue"><img src="themes/images/carousel/3.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>

		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="/manage-vue"><img src="themes/images/carousel/4.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>

		  </div>
		  </div>

		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div>
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
		@include('layouts._sidebar')
<!-- Sidebar end=============================================== -->
		<div class="span13">
			<div class="well well-small">
			<h4>Featured Products </h4>
			<div class="row-fluid">
			<!-- <div id="featured" class="carousel slide"> -->
      <div class="carousel-inner">

		<h4>Latest Products </h4>
			 

<!-- Footer ================================================================== -->
	 @include('layouts._footer')
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	 @include('layouts._script')
</body>

<script type="text/javascript">
function onclick(name){

}

</script>

</html>
