<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Dewin Admin</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{url('home')}}"> <i class="icon-dashboard"></i>Dashboard</a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-food"></i>Food</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_food')}}">Add Food</a></li>
                    <li><a href="{{url('view_food')}}">View Food</a></li>
                    
                  </ul>
                </li>
                <li><a href="{{url('orders')}}"> <i class="icon-order"></i>Orders</a>
                </li>
                <li><a href="{{url('reservations')}}"> <i class="icon-reservation"></i>Reservations</a>
                </li>
      </nav>
      <!-- Sidebar Navigation end-->