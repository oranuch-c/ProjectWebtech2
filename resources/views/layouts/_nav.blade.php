<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6"></div>
	<div class="span6">
	<div class="pull-right">
		<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a>
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
		<form class="form-inline navbar-search" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>การ์ตูน</option>
			<option>วรรณกรรม นวนิยาย</option>
			<option>นิตยสาร</option>
			<option>หนังสือต่างประเทศ </option>

		</select>
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="/special_offer">Specials Offer</a></li>
	 <li class=""><a href="/contact">Contact</a></li>
	 <li class=""><a href="/borrow">Borrow</a></li>
	 <li class="">
		 @if (Route::has('login'))
	             @if (Auth::check())
	          				<a href="/info" role="button" data-toggle="modal" style="padding-right:0">
											<span class="btn btn-large btn-success">
												{{ Auth::user()->name }}
											</span>
										</a>
	             @else
							 <li class=""><a href="/register">Register</a></li>
							<li class="">
							<a href="/login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	             @endif
	        @endif
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
