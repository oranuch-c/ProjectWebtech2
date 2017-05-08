
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">HOME</a>
    </div>



    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li><a href="{{ url('/all') }}">Book Rental Shop</a></li>
        <li><a href="{{ url('/categories') }}">Categories</a></li>
        <li><a href="{{ url('/titles') }}">Titles</a></li>
        <li><a href="{{ url('/search') }}">Search Books</a></li>
        <li><a href="{{ url('/api/titles') }}">API</a></li>

        @if (Route::has('login'))
            @if (Auth::check())
                <li><a href="{{ url('/singers/create') }}">Add Singer</a></li>
            @endif
        @endif
     </ul>
     <ul class="nav navbar-nav navbar-right top-right">
         @if (Route::has('login'))
             @if (Auth::check())
             <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                     {{ Auth::user()->name }} <span class="caret"></span>
                 </a>

                 <ul class="dropdown-menu" role="menu">
                     <li>
                       <a href="{{ url('/info') }}">Info</a>
                       <a href="{{ url('/changepass') }}">Reset Password</a>
                       <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             {{ csrf_field() }}
                         </form>
                     </li>
                 </ul>
             </li>
             @else
                 <li><a href="{{ url('/login') }}">Login</a></li>
                 <li><a href="{{ url('/register') }}">Register</a></li>
             @endif
        @endif
     </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>