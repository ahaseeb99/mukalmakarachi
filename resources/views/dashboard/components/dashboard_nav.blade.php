<nav class="dashboard_nav" >
      <div class="nav nav-tabs" id="nav-tab" role="tablist"> 
        <a class=" {{( request()->segment(2)  == 'profile' ) ? 'active' : '' }} nav-item  nav-link ml-0 fw-600 text-black"  href="{{route('dashboard')}}" > Profile</a>
        <a class="{{(request()->segment(2) == 'orders') ? 'active' : '' }} nav-item nav-link fw-600 text-black"  href="{{route('orders')}}" > My Order History</a> 
        <a class=" nav-item nav-link fw-600 text-black"  href="{{route('logout')}}"  >Logout</a>
      </div>
</nav>