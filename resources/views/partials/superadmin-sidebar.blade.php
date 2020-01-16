    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('superadmin.dashboard') }}"><img src="{{ URL::to('public/backend/images/logo.png') }}" alt="Logo"></a>
            </div>
            <div id="nav" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ route('superadmin.dashboard') }}"><i class="menu-icon fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <!-- <a href="orders.php"><i class="menu-icon fa fa-check-square-o"></i> Booking</a> -->
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cubes"></i> Appointments</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-list-ul"></i><a href="{{ route('appointment.view-appointment') }}"> All Appointments</a></li>
                            <li><i class="fa fa-list-ul"></i><a href="{{ route('appointment.view-appointment-history') }}"> Appointment History</a></li>
                            <li><i class="fa fa-list-ul"></i><a href="{{ route('appointment.view-appointment-status') }}"> Appointment Status</a></li>
                            <!-- <li><i class="fa fa-plus-square"></i><a href="{{ route('service.add-services') }}"> Add New</a></li> -->
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i> Users</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-list-ul"></i><a href="{{ route('users.view-users') }}"> All Users</a></li>
                            <li><i class="fa fa-plus-square"></i><a href="{{ route('users.add-users') }}"> Add New User</a></li>
                        </ul>
                    </li>


                    <li class="menu-item-has-children dropdown">
                        <a href="users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i> Vendors</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-list-ul"></i><a href="{{ route('vendor.view-vendors') }}"> All Vendors</a></li>
                            <li><i class="fa fa-plus-square"></i><a href="{{ route('vendor.add-vendor') }}"> Add New Vendor</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i> Maids</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-list-ul"></i><a href="{{ route('maid.view-maid') }}"> All Maids</a></li>
                            <li><i class="fa fa-plus-square"></i><a href="{{ route('maid.add-maid') }}"> Add New Maid</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                class="menu-icon fa fa-list"></i>Services </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-list-ul"></i><a href="{{ route('category.view-service-category') }}"> All Services</a></li>
                            <li><i class="fa fa-plus-square"></i><a href="{{ route('category.add-service-category') }}"> Add New Service</a></li>
                        </ul>
                    </li>
<!--                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                class="menu-icon fa fa-cubes"></i> Services</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-list-ul"></i><a href="{{ route('service.view-services') }}"> All Services</a></li>
                            <li><i class="fa fa-plus-square"></i><a href="{{ route('service.add-services') }}"> Add New</a></li>
                        </ul>
                    </li>-->
                    
                    <li><a href="{{ route('superadmin.setting') }}"><i class="menu-icon fa fa-cogs"></i> Settings</a></li>
                </ul>
            </div>
        </nav>
    </aside>