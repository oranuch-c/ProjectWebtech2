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
  <div class="navbar-inner" id="vue-app">
    <a class="brand" href="/index">BOOK RENTAL<alt="Book Rental Shop"/></a>
		<form class="form-inline navbar-search">
		<input id="srchFld" name="srchFld" type="text" />
<!-- 		  <select class="srchTxt">
			<option> <a href="/titles">All</a></option>
			<option>การ์ตูน</option>
			<option>วรรณกรรม นวนิยาย</option>
			<option>นิตยสาร</option>
			<option>หนังสือต่างประเทศ </option>

		</select> -->
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="/special_offer">Specials Offer</a></li>
	 <li class=""><a href="/contact">Contact</a></li>
	 <li class=""><a href="/register">Register</a></li>
	 <li class=""><a href="/borrow">Borrow</a></li>
	 <li class=""><a href="/titles">Book</a></li>
	 <li class="">
	 <a href="/login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm">
			  <div class="control-group">
				<input type="text" id="inputEmail" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password" id="inputPassword" placeholder="Password">
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Remember me
				</label>
			  </div>
			</form>
			<button type="submit" class="btn btn-success">Sign in</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		  </div>
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
@section('script')
<script>

var vm = new Vue({
    el: '#vue-app',
    data: {
        'srchFld': ''
    },
    methods: {
        submit: function () {
            axios.get('http://projectwebtech2.dev/api/search/'+this.srchFld, {
                name: this.srchFld
            }).then(function (response) {
                console.log(response.data.data);
                data = response.data.data;
                vm.srchFld = '';
            }).catch(function (error) {
                alert('Error (see console log)');
                console.log(error);
            });
        }
    }
});

</script>
@endsection
