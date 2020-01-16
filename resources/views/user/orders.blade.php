@extends('layouts.user-master')

@section('title')
User Orders
@endsection

@section('content')

<?php //echo "<pre>";print_r($orders);?>

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
                <h3 class="headingFull"><span>My Order(s)</span></h3>
                <div class="buyerOrderPage">
                    <!-- cartBlockRowHead -->
                    <div class="cartBlockRowHead">
                        <div class="cartBlockDesc">
                            <h3>Item Description</h3>
                        </div>
                        <div class="cartBlockRate">
                            <h3>Price ($)</h3>
                        </div>
                        <div class="cartBlockQty">
                            <h3>Quantity</h3>
                        </div>
                        <div class="cartBlockTotal">
                            <h3>Total</h3>
                        </div>
                    </div>

                    @foreach($orders as $order)
                    <div>
                            Oreder ID- {{ $order['id'] }} &nbsp;&nbsp;&nbsp;
                            Created- {{ $order['created_at'] }} &nbsp;&nbsp;&nbsp;
                            Total : $ {{ $order->cart->totalPrice }}
                    </div>
                    <!-- cartBlockRow -->
                     @foreach($order->cart->items as $item)
                        <div class="cartBlockRow">
                        <div class="cartBlockDesc">
                            <div class="cartBlockImg">
                                <img src="{{ $item['item']['image'] }}" alt="">
                            </div>
                            <h3>{{ $item['item']['product_name'] }}</h3>
                            <small>Color: Light Grey</small>
                            <div class="space10"><hr /></div>
                            <h4>Delivery Status: <strong>Dispatched to Courier</strong></h4>
                        </div>
                        <div class="cartBlockRate">
                            <p>$ {{ $item['price'] }} </p>
                        </div>
                        <div class="cartBlockQty">
                            <div id="myform2" class="qty-spinner">
                                <input type="text" name="quantity2" value="{{ $item['qty'] }}" class="qty" disabled="disabled">
                            </div>
                        </div>
                        <div class="cartBlockTotal">
                            <p class="pull-left">$ {{ $item['price'] * $item['qty']}} </p>
                            <!-- <a href="#" data-toggle="modal" data-target="#cancelOrderModal" class="btn btn-default2 btn-sm btn-rounded pull-right"><i class="fa fa-trash"></i> Cancel Order</a> -->
                        </div>
                    </div>
                        @endforeach
                        
                    <div class="space10"><hr /></div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<div class="space30"></div>

<!-- cancelOrderModal Modal -->
<div class="modal fade" id="cancelOrderModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cancel Order</h4>
            </div>
            <div class="modal-body">
                <div class="modal-form-block"> 
                    <div class="col-sm-12">
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="textinput">Product Details:</label>
                            <input class="" value="Set amet lorem ipsum" name="textinput" required="" type="text" disabled="disabled">
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="textinput">Reason for Cancellation:</label>
                            <!-- <input class="p-r-25" name="textinput" required="" type="text"> -->
                            <textarea rows="5"></textarea>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div><!-- end modal body -->
            <div class="modal-footer">
                <a href="#" class="btn btn-primary btn-lg btn-rounded">Submit</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- end modal content -->
    </div>
</div><!-- end modal -->

@endsection
