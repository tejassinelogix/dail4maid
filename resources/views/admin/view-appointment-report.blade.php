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
                        <a href="{{ route('admin.download-report') }}" style="margin-bottom: 10px;" class="btn btn-primary btn-lg">Download Report</a>
                        <br>
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Crew Name</th>
                                    <th>Start Time</th>
                                    <th>Stop Time</th>
                                    <th>Hours</th>
                                    <th>Code</th>
                                    <th>Materials</th>
                                    <th>Customer Name</th>
                                    <th>Address</th>
                                    <th>Payment Method</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Instruction</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach ($appointments as $appointment)
                                <tr>                                    
                                    <td>{{ $appointment->name }}</td>
                                    <td>{{ $appointment->c_from_time_slot }}</td>
                                    <td>{{ $appointment->c_to_time_slot }}</td>
                                    <td>{{ $appointment->c_stay_hours }}</td>
                                    <td></td>
                                    <td>{{ $appointment->c_material }}</td>
                                    <td></td>
                                    <td>{{ $appointment->address }}</td>
                                    <td>{{ $appointment->pay_method }}</td>
                                    <td>{{ $appointment->amount }}</td> 
                                    <td>{{ $appointment->status }}</td>
                                    <td></td>
                                    <td>
                                        <div class="operationsblok">
                                            <a href="update-appointment/{{ $appointment->id }}" data-toggle="tooltip" title="Edit">
                                                <i class="fa fa-eye"></i>
                                            </a> 
                                            <!-- <a href="delete-appointment/{{ $appointment->id }}" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure to Delete Appointment?');">
                                                <i class="fa  fa-trash-o"></i>
                                            </a> -->
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
