@extends('layouts.user-master')

@section('title')
User Orders
@endsection

@section('content')

<div class="innerPageSection">
    <div class="containerWrapper">
        <div class="breadcrumbs">
            <ul>
                <li><a href="index.php"><i class="fa fa-home"></i></a> <i class="fa fa-angle-right"></i> </li>
                <li>My Account</li>
            </ul>
        </div>
        <div class="space10"></div>
        <div class="row">
            @include('partials.user-sidebar')
             <div class="col-md-10 col-sm-10">
                <h3 class="headingFull"><span>Track Your Order</span></h3>
                <div class="panelbox">
                    <form class="modal-form-block row">
                        <div class="col-sm-4">
                            <label>Enter Your Order ID:</label>
                            <input type="text" name="" placeholder="e.g. Order ID: 1200909909">
                        </div>
                        <div class="col-sm-4">
                            <label>Enter Your Email ID: <small>(Used for placing the order)</small></label>
                            <input type="text" name="">
                        </div>
                        <div class="clear"></div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary btn-lg btn-rounded">Track <i class="fa fa-arrow-circle-o-right"></i></button>
                        </div>
                    </form>
                </div>
                <div class="space15"></div>
                <div class="panelbox">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                            In Transit
                        </div>
                    </div>
                    <p><strong>Tracking Details for:</strong> Set amet lorem ipsum</p>
                    <ul class="uls1">
                        <li><span class="pull-left">18 December 2018, 5:12 pm, New York, NY</span><span class="pull-right">Package arrived at courier facility</span></li>
                        <li><span class="pull-left">18 December 2018, 5:12 pm, New York, NY</span><span class="pull-right">Package received by courier</span></li>
                        <li><span class="pull-left">18 December 2018, 5:12 pm, New York, NY</span><span class="pull-right">Order details shared with courier</span></li>
                        <li><span class="pull-left">18 December 2018, 5:12 pm, New York, NY</span><span class="pull-right">Package dispatched from courier</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space30"></div>

@endsection
