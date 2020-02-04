    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('admin.dashboard') }}"><img src="{{ URL::to('public/backend/images/logo.png') }}" alt="Logo"></a>
            </div>
            <div id="nav" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ route('admin.dashboard') }}"><i class="menu-icon fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    
<!--                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                class="menu-icon fa fa-cubes"></i> Services</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-list-ul"></i><a href="all-services.php"> All Services</a></li>
                            <li><i class="fa fa-plus-square"></i><a href="add-new-services.php"> Add New</a></li>
                        </ul>
                    </li>-->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                class="menu-icon fa fa-list"></i>Services </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-list-ul"></i><a href="{{ route('admincategory.view-service-category') }}"> All Services</a></li>
                            <li><i class="fa fa-plus-square"></i><a href="{{ route('admincategory.add-service-category') }}"> Add New Service</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cubes"></i> Appointments</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-list-ul"></i><a href="{{ route('admin.view-appointment') }}"> All Appointments</a></li>
                            <!-- <li><i class="fa fa-list-ul"></i><a href="{{ route('admin.view-appointment') }}"> Appointments History</a></li>  -->
                            <li><i class="fa fa-list-ul"></i><a href="{{ route('admin.view-appointment-status') }}"> Appointments Status</a></li> 
                        </ul>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i> Clients</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-list-ul"></i><a href="{{ route('admin.view-users') }}"> All Clients</a></li>
                            <li><i class="fa fa-plus-square"></i><a href="{{ route('admin.add-users') }}"> Add New Client</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i> Maids</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-list-ul"></i><a href="{{ route('admin.view-maids') }}"> All Maids</a></li>
                            <li><i class="fa fa-plus-square"></i><a href="{{ route('admin.add-maids') }}"> Add New Maid</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('admin.setting') }}"><i class="menu-icon fa fa-cogs"></i> Setting</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cubes"></i> Reports</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-list-ul"></i><a href="{{ route('admin.view-appointment-report') }}"> All Appointments</a></li>
                            <li><i class="fa fa-list-ul"></i><a href="{{ route('admin.view-appointment-status-report') }}"> Appointments Status</a></li> 
                        </ul>
                    </li>
                    
<!--                    <li class="menu-item-has-children dropdown">
                        <a href="users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i> Vendors</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-list-ul"></i><a href="{{ route('admin.view-users') }}"> All Vendors</a></li>
                            <li><i class="fa fa-plus-square"></i><a href="{{ route('admin.add-users') }}"> Add New Vendors</a></li>
                        </ul>
                    </li>-->
<!--                    <li class="menu-item-has-children dropdown">
                        <a href="users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i> Users</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-list-ul"></i><a href="users.php"> All Users</a></li>
                            <li><i class="fa fa-plus-square"></i><a href="create-new-user.php"> Add New User</a></li>
                        </ul>
                    </li>
                    <li><a href="settings.php"><i class="menu-icon fa fa-cogs"></i> Settings</a></li>-->
                </ul>
            </div>
        </nav>
    </aside>
