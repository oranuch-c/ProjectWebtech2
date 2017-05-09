<!DOCTYPE html>
<html lang="en">
  @include('layouts._head')
<body>
  @include('layouts._nav')
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a href="/manage-vue"><img style="width:100%" src="themes/images/carousel/1.png" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				</div>
		  </div>
		  </div>

      <div class="item">
		  <div class="container">
			<a href="/manage-vue"><img style="width:100%" src="themes/images/carousel/2.png" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				</div>
		  </div>
		  </div>

      <div class="item">
		  <div class="container">
			<a href="/manage-vue"><img src="themes/images/carousel/3.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				</div>
		  </div>
		  </div>

       <div class="item">
		   <div class="container">
			<a href="/manage-vue"><img src="themes/images/carousel/4.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
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
			<h4>NEW BOOKS</h4>
			<div class="row-fluid">
			<!-- <div id="featured" class="carousel slide"> -->
      <div class="carousel-inner">
      <div class="item active">

        @foreach($new as $news)
				<li class="span3">
          <ul class="thumbnails">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="/product_details/{{$news->id}}"><img src="img/{{$news->img}}" alt=""></a>
					<div class="caption">
					  <h5>{{$news->name}}</h5>
					  <h4><a class="btn" href="/product_details/{{$news->id}}">VIEW</a> <span class="pull-right">{{$news->price}}</span></h4>
					</div>
				  </div>
				</li>
        </ul>
      @endforeach
      </div>
      </div>
			  </div>
			  </div>
		<!-- </div> -->
		<h4>ALL BOOKS </h4>
			  <ul class="thumbnails">
		<div class='container-fluid'>

	        @foreach($books as $book)
					<li class="span3">
					  <div class="thumbnail" style="margin:30px 30px 30px 100px;width:300px;height:300px;padding:5px;border:1px solid brown;">
						<a  href="/product_details/{{$book->id}}"><img style="width:50%;height: 40%"  src="img/{{$book->img}}" alt=""/></a>
						<div class="caption">
						  <h5>{{$book->name}}</h5>

						  <h4 style="text-align:center"><a class="btn" href="/product_details/{{$book->id}}"> <i class="icon-zoom-in"></i></a> <a class="btn" href="/borrow">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">{{$book->price}}</a></h4>
					  </div>
					  </div>

					</li>
	        @endforeach
	        </div>
			  </ul>


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
