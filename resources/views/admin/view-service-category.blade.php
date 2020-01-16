@extends('layouts.admin-master')

@section('title')
Admin | View Service Category
@endsection

@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>All Categories</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="index.php">Service Categories</a></li>
                        <li class="active">All Categories</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Title</th>
                                        <th>Service Image</th>
<!--                                        <th>Service Description</th>-->
                                        <th>Date</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Operations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    @foreach ($service_cat as $services)
                                    <tr>
                                        <td class="srNo">{{ $i++ }}</td>
                                        <td>{{ $services->service_cat_name['en'] }}</td>
                                        <td><img src="{{ URL::to( $services->service_cat_image ) }}" alt="" style="width: 100px; height: 100px;" />
                                            <!-- {{ $services->service_cat_image }} -->
                                        </td>
<!--                                        <td>{{ $services->service_cat_description['en'] }}</td>-->
                                        <td>{{ $services->created_at }}
                                        <td>{{ $services->service_price }}</td>
                                        <td>
                                            <?php if ($services->status == 1) { ?>
                                            <span class="badge badge-success">Enabled</span>
                                                <?php } else { ?>
                                            <span class="badge badge-danger">Disabled</span>
                                            <?php } ?>                                            
                                        <td>
                                            <div class="operationsblok">
                                                <a href="update-servicesCat/{{ $services->service_cat_id }}" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>                                                
                                                <a href="delete-servicesCat/{{ $services->service_cat_id }}" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure to Delete Category?');" >
                                                        <i class="fa  fa-trash-o"></i>
                                                </a>
<!--                                                <a href="update-servicesCategory" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>                                                
                                                <a href="#" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure to Delete Category?');" >
                                                        <i class="fa  fa-trash-o"></i>
                                                </a>-->


                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>
</div><!-- /#right-panel -->
@endsection