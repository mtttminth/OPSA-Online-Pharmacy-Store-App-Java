<div id="navbar">
  <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{asset('template/img/items/omoalogonav.png')}}" class="img">
          OMOA
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse"
         data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
          @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
          @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
          @endif
            @else
            <li class="nav-item">
              <a class="nav-link" href="/category">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/products">Products</a>
            </li>
          @can('create',\App\OrderItems::class)
            <li class="nav-item">
              <a class="nav-link" href="orderitems">
                <i class="fa fa-bell"></i> Orders
              </a>
            </li>
          @endcan
          @can('create',\App\Stock::class)
            <li class="nav-item">
              <a class="nav-link" href="/stock">Stock</a>
            </li>
          @endcan
          @can('create',\App\User::class)
            <li class="nav-item">
              <a class="nav-link" href="/users">Users</a>
            </li>
          @endcan
            <li class="nav-item">
              <a class="nav-link">
                <i class="fa fa-user"></i> {{ Auth::user()->name }}
              </a>           
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
            </li>   
          @endguest
        </ul>
      </div>
  </nav>
</div>
<script>
  window.onscroll = function() {myFunction()};
  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;
  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
    navbar.classList.remove("sticky");
  }
}
</script> 