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
      <h3 class="heading-center"><span><i class="fa fa-shopping-cart"></i> My Cart | <small>2 Item</small></span></h3>
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

      @if(Session::has('cart'))

    @foreach($products as $product)
      <!-- cartBlockRow -->
      <div class="cartBlockRow">
        <div class="cartBlockDesc">
          <div class="cartBlockImg">
            <img src="{{ asset('/').$product['item']['image'] }}" alt="">
          </div>
          <h3>{{ $product['item']['title'][$language] }}</h3>
          <small>Color: Light Grey</small>
        </div>
        <div class="cartBlockRate">
          <p>$ {{ $product['item']['product_price'] }}</p>
        </div>
        <div class="cartBlockQty">
          <div id="myform2" class="qty-spinner">
                    <a href="{{ route('product.reduceByOne', ['id' => $product['item']['id'] ]) }}"><input type="button" value="-" class="qtyminus" field="quantity2"></a>
                    
                    <input type="text" name="quantity2" value="{{ $product['qty'] }}" class="qty">
                    <a href="{{ route('product.increaseByOne', ['id' => $product['item']['id'] ]) }}"><input type="button" value="+" class="qtyplus" field="quantity2"></a>
                </div>
        </div>
        <div class="cartBlockTotal">
          <p>$ {{ $product['qty'] * $product['item']['product_price'] }}</p>
          <a href="{{ route('product.remove', ['id' => $product['item']['id'] ]) }}"><button><i class="fa fa-close"></i></button></a>
        </div>
      </div>
       @endforeach
      @else
      <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
          <h1>{{ __('msg.empty cart') }} </h1>
        </div>
      </div>
      @endif

     

        <div class="cartBlockRowFooter">
            <div class="cartBlockRowFooterMargin">                
                <p>Delivery and payment options can be selected later.</p>
            </div>
            <div class="cartBlockRowFooterLastCol">
                <div class="cartBlockRowFooterInfo">
                    <p>{{ __('msg.total') }}</p>
                    <p>Delivery Charges:</p>
                </div>
                <div class="cartBlockRowFooterTotal">
                    <p>{{ $totalPrice }}</p>
                    <p>Free</p>
                </div>
                <div class="space5"><hr /></div>
                <div class="cartBlockRowFooterInfo">
                    <h4>You Pay:</h4>
                </div>
                <div class="cartBlockRowFooterTotal">
                    <h4><strong>$ {{ $totalPrice }}</strong></h4>
                </div>
                <div class="space10"></div>
                <a href="{{ route('checkout') }}" class="btn btn-primary btn-rounded btn-lg">{{ __('msg.checkout') }} <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
  </div>
</div>













<!-- <div class="container">
  <section class="ShoppingCart">
  @if(Session::has('cart'))
      <div class="row">
        <h3>Shopping Cart</h3>
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
          <ul class="list-group">
            @foreach($products as $product)
                <li class="list-group-item">
                  <span class="badge">{{ $product['qty'] }}</span>
                  <strong>{{ $product['item']['title'][$language] }}</strong>
                  <span class="label CartBtn">$ {{ $product['item']['product_price'] }}</span>
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle " data-toggle="dropdown"> {{ __('msg.action') }}  <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href="{{ route('product.increaseByOne', ['id' => $product['item']['id'] ]) }}">{{ __('msg.increase by 1') }}</a></li>
                      <li><a href="{{ route('product.reduceByOne', ['id' => $product['item']['id'] ]) }}">{{ __('msg.reduce by 1') }}</a></li>
                      <li><a href="{{ route('product.remove', ['id' => $product['item']['id'] ]) }}">{{ __('msg.reduce all') }}</a></li>
                    </ul>
                  </div>
                </li>
              @endforeach
            </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
          <strong>{{ __('msg.total') }} : {{ $totalPrice }}</strong>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
          <button type="button" class="btn CartBtn">{{ __('msg.checkout') }}</button>
        </div>
      </div>
  @else
      <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
          <h1>{{ __('msg.empty cart') }} </h1>
        </div>
      </div>
  @endif
</section>
</div> -->

@endsection
