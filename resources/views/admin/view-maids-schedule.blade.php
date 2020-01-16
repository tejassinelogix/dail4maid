@extends('layouts.admin-master')

@section('title')
Admin Dashboard
@endsection

@section('content')
        
        <!-- All Maid -->
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

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Schedul List</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Day</th>
                                        <th>cleaner stay</th>
                                        <th>cleaners</th>
                                        <th>materials</th>
                                        <th>Date & Time</th>
                                        <th>Assign To</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    @foreach ($maids as $maid)
                                    <tr>
                                        <td class="srNo">{{ $i++ }}</td>
                                        <td>{{ $maid->c_days }}</td>
                                        <td>{{ $maid->c_stay_hours }}</td>
                                        <td>{{ $maid->c_qty }}</td>
                                        <td>{{ $maid->c_material }}</td>
                                        <td>{{ $maid->c_date }}</td>
                                        <td></td>
<!--                                        <td>{{ $maid->c_instruction }}</td>-->
                                        
                                        <td>
                                            <div class="operationsblok">
                                                <a href="update-maid-schedule/{{ $maid->id }}" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>                                                
                                                <a href="#" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure to Delete Maid Schedul?');" >
                                                        <i class="fa  fa-trash-o"></i>
                                                </a>
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
        <!-- All Product -->

@endsection
