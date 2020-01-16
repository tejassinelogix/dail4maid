@extends('layouts.master')

@section('title')
Qubiee shopping Cart
@endsection

@section('content')


<div class="innerPageSection cartPageSection">
  <div class="containerWrapper">
    <div class="breadcrumbs">
          <ul>
              <li><a href="index.php"><i class="fa fa-home"></i></a> <i class="fa fa-angle-right"></i> </li>
              <li><a href="product-categories.php"> Cups / Mugs</a><i class="fa fa-angle-right"></i></li>
              <li><a href="product-details.php"> Set amet lorem ipsum bouquet</a><i class="fa fa-angle-right"></i></li>
              <li>Shopping Cart</li>
          </ul>
      </div>
      <div class="space10"></div>
      <div class="col-md-10 col-sm-10">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-control" method="POST" action="{{ route('checkout') }}">

                                @if ($message = Session::get('success'))
                                {!! $message !!}
                                <?php Session::forget('success'); ?>
                                @endif
                                @if ($message = Session::get('error'))
                                {!! $message !!}
                                <?php Session::forget('error'); ?>
                                @endif

                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Amount : {{ $total }}</label>
                                    <input value="{{ $total }}" name="amount" type="hidden">
                                    
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                    <div class="col-md-6">
                                        <input id="name" class="form-control" name="name" type="text" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                    <div class="col-md-6">
                                        <input id="email" class="form-control" name="email" type="text" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="contact" class="col-md-4 col-form-label text-md-right">Mobile</label>
                                    <div class="col-md-6">
                                        <input id="contact" class="form-control" name="contact" type="text" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
                                    <div class="col-md-6">
                                        <textarea id="address" class="form-control" name="address" required autofocus>
                                    </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="postal_code" class="col-md-4 col-form-label text-md-right">Postal Code</label>
                                    <div class="col-md-6">
                                        <input id="postal_code" class="form-control" name="postal_code" type="text" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="city" class="col-md-4 col-form-label text-md-right">City</label>
                                    <div class="col-md-6">
                                        <input id="city" class="form-control" name="city" type="text" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-md-4 col-form-label text-md-right">      </label>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" style="display: inline-block !important" class="btn-orange full-btn">Pay with PayPal</button>
                                        <button type="reset" style="display: inline-block !important" class="btn-orange full-btn">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
  </div>
</div>

@endsection
