@extends('layouts.master')

@section('title')
Qubiee
@endsection

@section('content')

  <!-- bannerSection -->
  <div class="bannerSection">
    <div class="bannerContainer">
      <div id="banner-slider" class="owl-carousel bannerSlider">
            <div class="item">
                <div class="replaceImg" style="background: url(public/assets/images/slide1.jpg) no-repeat center;">
                  <div class="bannerCaption">
                    <h2>Personalised Mugs & Cups</h2>
                  </div>
                </div>
            </div>
            <div class="item">
                <div class="replaceImg" style="background: url(public/assets/images/slide2.jpg) no-repeat center;">
                  <div class="bannerCaption">
                    <h2>Photo Gifts</h2>
                  </div>
                </div>
            </div>
            <div class="item">
                <div class="replaceImg" style="background: url(public/assets/images/slide3.jpg) no-repeat center;">
                  <div class="bannerCaption">
                    <h2>T-Shirts & Polos</h2>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div><!-- End of bannerSection -->

  <!-- productColSection -->
  <div class="productColSection" id="intro">
    <div class="containerWrapper">
      <div class="row featColRow">
                <div class="col-md-6 col-sm-6 featCol">
                    <div class="featProductBlock">
                        <div class="featProductBlockInner">
                            <h3>Gift Items</h3>
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit sed.</p>
                            <a href="#" class="btn btn-primary btn-lg btn-rounded">Buy Now! <i class="fa fa-shopping-cart"></i></a>
                        </div>
                        <img src="public/assets/images/featProduct1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 featCol">
                    <div class="featProductBlock">
                        <div class="featProductBlockInner">
                            <h3>Featuring Polo's</h3>
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit sed.</p>
                            <a href="#" class="btn btn-primary btn-lg btn-rounded">Buy Now! <i class="fa fa-shopping-cart"></i></a>
                        </div>
                        <img src="public/assets/images/featProduct2.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <h2 class="heading-center"><span>Featured Products</span></h2>
      <div class="row">
        <div class="col-md-12 col-sm-12 productCol">
          @foreach($products->chunk(6) as $productChunk)
          <div class="row">
            @foreach($productChunk as $product)
            <div class="col-sm-3">
              <div class="productBlock">
                <a href="#" class="productBlockImg">
                  <div style="background: url('{{ $product->image }}') no-repeat;"></div>
                </a>
                <div class="productBlockInfo">
                  <h3 class="protitle">{{ $product->title[$language] }}</h3>
                  <ul class="proRating">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star-half-o"></i></li>
                  </ul>
                  <h2 class="propricing">$ {{ $product->product_price }}</h2>
                  <p class="proinfo">{{ $product->body[$language] }}</p>
                </div>
                <div class="productBlockViewDtl">
                  <a href="{{ route('product.details', ['id' => $product->id]) }}" class="btn1">{{ __('msg.view details') }} <i class="fa fa-arrow-circle-right"></i></a>
                  <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn2">{{ __('msg.Add To Cart') }} <i class="fa fa-shopping-cart"></i></a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  <!-- parallaxSection1 -->
  <div class="parallaxSection1">
    <div class="container text-center">
      <h2>Quality Customisation</h2>
      <h4>Sed accumsan purus at nunc sodales posuere. Sed pretium urna sed commodo vulputate. Nunc sem ex, semper quis lacus vel, efficitur consequat turpis. Praesent nunc dui, vehicula eget dolor nec, pulvinar pretium nisi. Phasellus vel luctus nisi, in viverra lorem</h4>
    </div>
  </div>

@endsection