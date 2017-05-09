<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Book Rental Shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
<!--Less styles -->
 <!-- Other Less css file //different less files has different color scheam
<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
-->
<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
<script src="themes/js/less.js" type="text/javascript"></script> -->

<!-- Bootstrap style -->
  <link id="callCss" rel="stylesheet" href="../themes/bootshop/bootstrap.min.css" media="screen"/>
  <link href="../themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->
<link href="../themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
<link href="../themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->
<link href="../themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
  <link rel="shortcut icon" href="../themes/images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../themes/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../themes/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../themes/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../themes/images/ico/apple-touch-icon-57-precomposed.png">
<style type="../text/css" id="enject"></style>
</head>

<body>
  <div id="header">
  <div class="container">
  <div id="welcomeLine" class="row">
  	<div class="span6"></div>
  	<div class="span6">
  	<div class="pull-right">
  		<a href="../product_summary"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a>
  	</div>
  	</div>
  </div>
  <!-- Navbar ================================================== -->
  <div id="logoArea" class="navbar">
  <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
  	<span class="icon-bar"></span>
  	<span class="icon-bar"></span>
  	<span class="icon-bar"></span>
  </a>
    <div class="navbar-inner">
      <a class="brand" href="/index">BOOK RENTAL<alt="Book Rental Shop"/></a>
  		<form class="form-inline navbar-search" method="post" action="../products" >
  		<input id="srchFld" class="srchTxt" type="text" />
<!--   		  <select class="srchTxt">
  			<option>All</option>
  			<option>การ์ตูน</option>
  			<option>วรรณกรรม นวนิยาย</option>
  			<option>นิตยสาร</option>
  			<option>หนังสือต่างประเทศ </option>

  		</select> -->
  		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
      </form>
      <ul id="topMenu" class="nav pull-right">
   <li class=""><a href="/manage-vue">Promotion</a></li>
   <li class=""><a href="/voucher">Voucher</a></li>
   <li class=""><a href="/borrow">Borrow</a></li>
   <li class=""><a href="/contact">Contact</a></li>
   <li class=""><a href="/titles">All Book</a></li>
  		 @if (Route::has('login'))
  	             @if (Auth::check())
  	          				<a href="../info" role="button" data-toggle="modal" style="padding-right:0">
  											<span class="btn btn-large btn-success">
  												{{ Auth::user()->name }}
  											</span>
  										</a>
  	             @else
  							 <li class=""><a href="../register">Register</a></li>
  							<li class="">
  							<a href="../login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
  	             @endif
  	        @endif
  	</div>
  	</li>
      </ul>
    </div>
  </div>
  </div>
  </div>

<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
		<!-- @include('layouts._sidebar') -->
<!-- Sidebar end=============================================== -->
<?php
  foreach($book as $books){ ?>
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="../index">Home</a> <span class="divider">/</span></li>
    <li><a href="../products/">Products</a> <span class="divider">/</span></li>
    <li class="active">product Details</li>
    </ul>
	<div class="row">
			<div id="gallery" class="span3">
            <a href="../img/<?php echo $books->img; ?>" title="Fujifilm FinePix S2950 Digital Camera">
				<img src="../img/{{ $books->img }}" style="width:80%" alt="Fujifilm FinePix S2950 Digital Camera"/>
            </a>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                   <a href="../img/<?php echo $books->img; ?>"> <img style="width:29%" src="../img/<?php echo $books->img; ?>" alt=""/></a>
                   <a href="../img/<?php echo $books->img; ?>"> <img style="width:29%" src="../img/<?php echo $books->img; ?>" alt=""/></a>
                   <a href="../img/<?php echo $books->img; ?>"> <img style="width:29%" src="../img/<?php echo $books->img; ?>" alt=""/></a>
                  </div>
                  <div class="item">
                   <a href="../img/<?php echo $books->img; ?>" > <img style="width:29%" src="../img/<?php echo $books->img; ?>" alt=""/></a>
                   <a href="../img/<?php echo $books->img; ?>"> <img style="width:29%" src="../img/<?php echo $books->img; ?>" alt=""/></a>
                   <a href="../img/<?php echo $books->img; ?>"> <img style="width:29%" src="../img/<?php echo $books->img; ?>" alt=""/></a>
                  </div>
                </div>
              </div>

			</div>
			<div class="span6">

				<h3><?php echo $books->name; ?> </h3>
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span><?php echo $books->price; ?> Bath.</span></label>
					<div class="controls">
					<input type="number" class="span1" placeholder="Qty."/>
					  <button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
					</div>
				  </div>
				</form>

				<hr class="soft"/>


			<a href="#" name="detail"></a>
      <h5><?php echo $books->description; ?> </h5>
			<hr class="soft"/>
			</div>

			<div class="span9">
            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
            </ul>

        <table class="table table-bordered">
				<tbody>
				<tr class="techSpecRow"><th colspan="2">Book Details:</th></tr>
        <tr class="techSpecRow"><td class="techSpecTD1">Author: </td><td class="techSpecTD2"><?php echo $books->author; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Year: </td><td class="techSpecTD2"><?php echo $books->year; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Page Size:</td><td class="techSpecTD2"><?php echo $books->pageSize; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Publish:</td><td class="techSpecTD2"> <?php echo $books->publishComp; ?></td></tr>
				</tbody>
				</table>

				</div>




			</div>
		</div>
				<br class="clr">
					 </div>
		</div>
          </div>

	</div>
</div>
</div> </div>
</div>
<?php } ?>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
  <div  id="footerSection">
  <div class="container">
   <div class="row">
     <div class="span3">
       <h5>ACCOUNT</h5>
       <a href="../login">YOUR ACCOUNT</a>
       <a href="../login">PERSONAL INFORMATION</a>
       <a href="../login">ADDRESSES</a>
       <a href="../login">DISCOUNT</a>
       <a href="../login">ORDER HISTORY</a>
      </div>
     <div class="span3">
       <h5>INFORMATION</h5>
       <a href="../contact">CONTACT</a>
       <a href="../register">REGISTRATION</a>
      </div>
     <div class="span3">
       <h5>OUR OFFERS</h5>
       <a href="#">NEW PRODUCTS</a>
       <a href="#">TOP SELLERS</a>
       <a href="../special_offer">SPECIAL OFFERS</a>
       <a href="#">MANUFACTURERS</a>
       <a href="#">SUPPLIERS</a>
      </div>
     <div id="socialMedia" class="span3 pull-right">
       <h5>SOCIAL MEDIA </h5>
       <a href="#"><img width="60" height="60" src="../themes/images/facebook.png" title="facebook" alt="facebook"/></a>
       <a href="#"><img width="60" height="60" src="../themes/images/twitter.png" title="twitter" alt="twitter"/></a>
       <a href="#"><img width="60" height="60" src="../themes/images/youtube.png" title="youtube" alt="youtube"/></a>
      </div>
    </div>
   <p class="pull-right">&copy; Bootshop</p>
  </div><!-- Container End -->
  </div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
  <script src="../themes/js/jquery.js" type="text/javascript"></script>
  <script src="../themes/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../themes/js/google-code-prettify/prettify.js"></script>

  <script src="../themes/js/bootshop.js"></script>
  <script src="../themes/js/jquery.lightbox-0.5.js"></script>
</body>
</html>
