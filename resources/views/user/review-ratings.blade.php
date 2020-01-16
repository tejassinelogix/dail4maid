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
             <div class="col-md-10 col-sm-10 myreviewsFull">
                <h3 class="headingFull"><span><i class="fa fa-edit"></i> My Review</span></h3>
                <a href="#" class="btn btn-primary btn-lg btn-rounded" data-toggle="modal" data-target="#write-review-modal"><i class="fa fa-edit"></i> Write a Review</a>
                <div class="space10"><hr /></div>
                <div class="customerReviewRow">
                    <div class="customerReviewBlock">
                        <img src="{{ asset('/') }}public/assets/images/clientimg1.jpg" alt="">
                        <h4>Good & quality product <span>On Dec, 18, 2018</span></h4>
                        <ul class="ratings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half"></i></li>
                        </ul>
                        <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis. Sunt suscipit voluptas ipsa in tempora esse soluta sint.</p>
                    </div>
                </div>
                <div class="customerReviewRow">
                    <div class="customerReviewBlock">
                        <img src="{{ asset('/') }}public/assets/images/clientimg2.jpg" alt="">
                        <h4>Good & quality product <span>On Dec, 18, 2018</span></h4>
                        <ul class="ratings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half"></i></li>
                        </ul>
                        <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis. Sunt suscipit voluptas ipsa in tempora esse soluta sint.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space30"></div>

<!-- write-review-modal-->
<div class="modal fade" id="write-review-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-edit"></i> Write a Review</h4>
            </div>
            <div class="modal-body">
                <div class="modal-form-block row">
                    <div class="col-sm-6">
                        <label>Review Title:</label>
                        <input type="text" required="required" />
                    </div>
                    <div class="col-sm-6">
                        <label>Review on Product:</label>
                        <input type="text" required="required" />
                    </div>
                    <div class="col-sm-12">
                        <label>Write your review <small>(Limit is 4000 characters)</small></label>
                        <textarea rows="8"></textarea>
                    </div>
                    <div class="col-sm-6">
                        <label>Rating(s):</label>
                        <select>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label>Upload your Photo:</label>
                        <input type="file" required="required" />
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
