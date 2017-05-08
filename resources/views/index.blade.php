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
			<a href="/product_details"><img style="width:100%" src="themes/images/carousel/1.png" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="/product_details"><img style="width:100%" src="themes/images/carousel/2.png" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="/product_details"><img src="themes/images/carousel/3.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>

		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="/product_details"><img src="themes/images/carousel/4.png" alt=""/></a>
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
		<div class="span9">
			<div class="well well-small">
			<h4>Featured Products </h4>
			<div class="row-fluid">
			<!-- <div id="featured" class="carousel slide"> -->
      <div class="carousel-inner">
      <div class="item active">
        <?php
        $i=0;

          foreach($books as $book){
            if($i<4){?>
				<li class="span3">
          <ul class="thumbnails">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.html"><img src="img/{{$book->img}}" alt=""></a>
					<div class="caption">
					  <h5>{{$book->name}}</h5>
					  <h4><a class="btn" href="/product_details">VIEW</a> <span class="pull-right">{{$book->price}}</span></h4>
					</div>
				  </div>
				</li>
        </ul>
        <?php };
          $i++;
        };
       ?>
      </div>
      </div>
			  </div>
			  </div>
		<!-- </div> -->
		<h4>Latest Products </h4>
			  <ul class="thumbnails">
        @foreach($books as $book)
				<li class="span3">
				  <div class="thumbnail">
					<a  href="/product_details"><img src="img/{{$book->img}}" alt=""/></a>
					<div class="caption">
					  <h5>{{$book->name}}</h5>

					  <h4 style="text-align:center"><a class="btn" href="/product_details"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">{{$book->price}}</a></h4>
					</div>
				  </div>
				</li>
        @endforeach
			  </ul>

		</div>
		</div>
	</div>
</div>
<!-- Footer ================================================================== -->
	 @include('layouts._footer')
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	 @include('layouts._script')
</body>
</html>
