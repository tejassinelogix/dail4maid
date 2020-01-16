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

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Customers List</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Client Name</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>Operations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td class="srNo">{{ $i++ }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->contact }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>
                                            <div class="operationsblok">
                                                <a href="update-user/{{ $user->id }}" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>                                                
                                                <a href="delete-user/{{ $user->id }}" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure to Delete User?');" >
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
