<?php
//echo '<pre>';
//            print_r($appointments);
//            die();
?>
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
                        <strong class="card-title">Appointment List</strong>
                    </div>
                    <div class="card-body">
                        
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Maid</th>
                                    <th>Date</th>
                                    <th>Time(FROM)</th>
                                    <th>Time(To)</th>
                                    <th>Hours</th>
                                    <th>Material</th>
                                    <th>Address</th>
                                    <th>Payment Method</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach ($appointments as $appointment)
                                <tr>
                                    <td class="srNo">{{ $i++ }}</td>
                                    <td>{{ $appointment->id }}</td>
                                    <td>{{ $appointment->name }}</td>
                                    <td>
                                    <?php foreach ($Maid as $maid) {
                                    if( $maid->id == $appointment->maid_id) { ?>
                                       {{ $maid->name }}
                                    <?php } } ?>
                                    </td>
                                    <td>{{ $appointment->c_date }}</td>
                                    <td>{{ $appointment->c_from_time_slot }}</td>
                                    <td>{{ $appointment->c_to_time_slot }}</td>
                                    <td>{{ $appointment->c_stay_hours }}</td>
                                    <td>{{ $appointment->c_material }}</td>
                                    <td>{{ $appointment->address }}</td>
                                    <td>{{ $appointment->amount }}</td>
                                    <td>{{ $appointment->pay_method }}</td>
                                    <td>{{ $appointment->status }}

                                        <form action="{{ route('admin.update-status') }}" id="update" method="post">
                                            {{csrf_field()}}
                                            <select name="apt_status">
                                                <option value="Pending">Pending</option>
                                                <option value="Processed">Processed</option>
                                                <option value="Completed">Completed</option>
                                            </select>
                                            <input type="hidden" name="apt_id" value="{{ $appointment->id }}">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                        
                                    </td>
                                    <td>
                                        <div class="operationsblok">
                                            <a href="update-appointment/{{ $appointment->id }}" data-toggle="tooltip" title="Edit">
                                                <i class="fa fa-eye"></i>
                                            </a> 
                                            <a href="delete-appointment/{{ $appointment->id }}" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure to Delete Appointment?');">
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
