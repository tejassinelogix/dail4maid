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
                <li>My Complaints</li>
            </ul>
        </div>
        <div class="space10"></div>
        <div class="row">
            @include('partials.user-sidebar')
            <div class="col-md-10 col-sm-10 myreviewsFull">
                <h3 class="headingFull"><span><i class="fa fa-edit"></i> My Complaints</span></h3>
                <a href="#" class="btn btn-primary btn-lg btn-rounded" data-toggle="modal" data-target="#write-complaint-modal"><i class="fa fa-edit"></i> Write a Review</a>
            </div>
        </div>
    </div>
</div>
<div class="space30"></div>

<!-- buyer-my-complaints-modal-->
<div class="modal fade" id="write-complaint-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-edit"></i> Write a Complaint</h4>
            </div>
            <div class="modal-body">
                <div class="modal-form-block row">
                    <div class="col-sm-6">
                        <label>Title:</label>
                        <input type="text" required="required" />
                    </div>
                    <div class="col-sm-6">
                        <label>Product / Service:</label>
                        <input type="text" required="required" />
                    </div>
                    <div class="col-sm-12">
                        <label>Write your complaint <small>(Limit is 4000 characters)</small></label>
                        <textarea rows="8"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-lg btn-rounded">Submit</button>
            </div>
        </div>
    </div>
</div>
<!--write-review-modal-->

@endsection
