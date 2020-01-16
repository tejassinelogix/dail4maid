@extends('layouts.admin-master')

@section('title')
Admin Dashboard
@endsection

@section('content')
        
        <!-- All Product -->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>{{ __('msg.Admin Dashboard') }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active"><a href="#">{{ __('msg.Admin Dashboard') }}</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="content mt-3">-->
<!--            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">{{ __('msg.Admin Dashboard') }}</strong>
                            </div>
                            <div class="card-body card-block">
                                 @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                 You are logged in as <strong>{{ __('msg.Admin') }}</strong>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> .animated 1-->
            
            
            <div class="content mt-3">
        <!-- dashboardBlocks -->
        <div class="col-sm-6 col-lg-4">
            <a href="{{ route('admin.view-appointment') }}" class="dashboardBlocks">
                <div class="dashboardBlockTitle"><p>Appointment</p></div>
                <div class="dashboardBlockNumb"><h3></h3></div>
                <div class="dashboardBlockInfo"><p> New Appointment</p></div>
                <div class="dashboardBlockIcon"><i class="fa fa-check-square-o"></i></div>
            </a>
        </div><!-- End of dashboardBlocks -->

        <!-- dashboardBlocks -->
        <div class="col-sm-6 col-lg-4">
            <a href="{{ route('admincategory.view-service-category') }}" class="dashboardBlocks">
                <div class="dashboardBlockTitle"><p>Services</p></div>
                <div class="dashboardBlockNumb"><h3></h3></div>
                <div class="dashboardBlockInfo"><p> Services</p></div>
                <div class="dashboardBlockIcon"><i class="fa fa-cubes"></i></div>
            </a>
        </div><!-- End of dashboardBlocks -->

        <!-- dashboardBlocks -->
<!--        <div class="col-sm-6 col-lg-3">
            <a href="categories.php" class="dashboardBlocks">
                <div class="dashboardBlockTitle"><p>Categories</p></div>
                <div class="dashboardBlockNumb"><h3>12</h3></div>
                <div class="dashboardBlockInfo"><p>All Categories</p></div>
                <div class="dashboardBlockIcon"><i class="fa fa-list"></i></div>
            </a>
        </div>-->
        <!-- End of dashboardBlocks -->

        <!-- dashboardBlocks -->
        <div class="col-sm-6 col-lg-4">
            <a href="{{ route('admin.view-users') }}" class="dashboardBlocks">
                <div class="dashboardBlockTitle"><p>Total Customers</p></div>
                <div class="dashboardBlockNumb"><h3></h3></div>
                <div class="dashboardBlockInfo"><p> New Customers</p></div>
                <div class="dashboardBlockIcon"><i class="fa fa-users"></i></div>
            </a>
        </div><!-- End of dashboardBlocks -->
    </div>

        <!--</div> .content -->
        <!-- All Product -->

@endsection
