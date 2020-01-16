@extends('layouts.master')

@section('title')
Qubiee Product Details
@endsection
<div class="container">
@section('content')


<div class="innerPageSection">
    <div class="containerWrapper">
        <div class="breadcrumbs">
            <ul>
                <li><a href="index.php"><i class="fa fa-home"></i></a> <i class="fa fa-angle-right"></i> </li>
                <li><a href="product-categories.php"> Cups / Mugs</a><i class="fa fa-angle-right"></i></li>
                <li>Set amet lorem ipsum bouquet</li>
            </ul>
        </div>
        <div class="space10"></div>
        @foreach($products as $product)
        <div class="productDetailsRow">
            <div class="row">
                <div class="col-md-4 zoomImageSlider">
                    <div class="show" href="{{ asset('/').$product->image }}">
                        <img src="{{ asset('/').$product->image }}" id="show-img">
                    </div>
                    <div class="small-img">
                        <img src="{{ asset('/') }}public/assets/images/online_icon_left.png" class="icon-left" alt="" id="prev-img">
                        <div class="small-container">
                            <div id="small-img-roll">
                                <img src="{{ asset('/').$product->image }}" class="show-small-img" alt="">
                                <img src="{{ asset('/').$product->image }}" class="show-small-img" alt="">
                                <img src="{{ asset('/').$product->image }}" class="show-small-img" alt="">
                                <img src="{{ asset('/').$product->image }}" class="show-small-img" alt="">
                                <img src="{{ asset('/').$product->image }}" class="show-small-img" alt="">
                            </div>
                        </div>
                        <img src="{{ asset('/') }}public/assets/images/online_icon_right@2x.png" class="icon-right" alt="" id="next-img">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="designCustomBtn">
                                <a href="#" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-upload"></i>
                                    Upload your complete new design
                                    <span>Click here to Customize Design</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="productDescriptionBlock">
                                <div class="product-title">
                                    <h3>{{ $product->title[$language] }}</h3>
                                    <a href="#" class="wishlist-btn" title="Add to Wishlist"><i class="fa fa-heart"></i> Add to Wishlist</a>
                                </div>
                                <div class="ratings-review-details">
                                    <ul class="ratings">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half"></i></li>
                                    </ul>
                                    <span>|</span>
                                    <a href="#">120 Ratings</a>
                                    <span>|</span>
                                    <a href="#">230 Reviews</a>
                                </div>
                                <div class="productQuickInfo">
                                    <h4>Quick Info:</h4>
                                    <p>{{ $product->subtitle[$language] }}</p>
                                    <p>{{ $product->body[$language] }}</p>
                                </div>
                                <div class="proquantity">
                                    <span>Quantity:</span>
                                    <!-- <input type="number" name="quantity" value="1"> -->
                                    <div id="myform2" class="qty-spinner">
                                        <input type="button" value="-" class="qtyminus" field="quantity2">
                                        <input type="text" name="quantity2" value="1" class="qty">
                                        <input type="button" value="+" class="qtyplus" field="quantity2">
                                    </div>
                                </div>
                                <div class="productPageHeadRate">
                                    <h3>$ {{ $product->product_price }} <small>$30</small> <span>25% Off</span></h3>
                                </div>
                                <div class="buyBtns">
                                    <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-primary btn-lg"><i class="fa fa-shopping-cart"></i> Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="space15"></div>

        <!-- productDescriptionFull -->
        <div class="productDescriptionFull">
            <div role="tabpanel">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs tablayout1 big-tab" role="tablist">
                    <li role="presentation" class="active"><a href="#product-details" aria-controls="tab1" role="tab" data-toggle="tab">Product Details</a></li>
                    <li role="presentation"><a href="#seller-details" aria-controls="tab2" role="tab" data-toggle="tab">Company Profile</a></li>
                    <li role="presentation"><a href="#product-reviews" aria-controls="tab3" role="tab" data-toggle="tab">Review (3)</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content tablayout-content">
                    <div role="tabpanel" class="tab-pane active" id="product-details">
                        <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis. Sunt suscipit voluptas ipsa in tempora esse soluta sint.</p>
                        <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis. Sunt suscipit voluptas ipsa in tempora esse soluta sint.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="seller-details">
                        <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis. Sunt suscipit voluptas ipsa in tempora esse soluta sint.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="product-reviews">
                        <div class="customerReviewRow">
                            <div class="customerReviewBlock">
                                <img src="assets/images/clientimg1.jpg" alt="">
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
                                <img src="assets/images/clientimg2.jpg" alt="">
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
                                <img src="assets/images/clientimg3.jpg" alt="">
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

        <div class="space15"><hr /></div>

        <!-- relatedProductsSection -->
        <div class="relatedProductsSection">
            <h3 class="heading-center"><span>Related products</span></h3>
            <div class="row relatedProducts">
                <div class="owl-carousel" id="relatedProductsSlider">
                    @foreach($products as $product)
                    <div class="item">
                        <div class="productBlock">
                            <a href="product-details.php" class="productBlockImg">
                                <div style="background: url('{{asset('/').$product->image}}') no-repeat;"></div>
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
                                <p class="proinfo">Earliest Delivery: Today</p>
                            </div>
                            <div class="productBlockViewDtl">
                                <a href="product-details.php" class="btn1">View details <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn2">Buy Now <i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Upload Custom Design</h4>
      </div>
      <div class="modal-body">
        <form class="uploadImgContainer tshirtuploadingImg">
            <div class="uploadLabelDiv">
                <label for="uploadImgLabel" class="uploadImgLabel">
                    <i class="fa fa-image"></i>
                    <strong>Upload Image</strong>
                    <input type="file" name="uploadImg" id="uploadImgLabel">
                </label>
            </div>
            <div class="uploadImgPreview">
                <h4 class="headingFull"><span><i class="fa fa-eye"></i> Preview</span></h4>
                <img src="" id="uploadImgPreviewDesign">
                <img src="assets/images/tshirt-men-full.png" alt="" class="uploadImgPreviewFull">
            </div>
        </form>
      </div>
      <div class="modal-footer text-center">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary btn-lg"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
        <a href="shopping-cart.php" class="btn btn-primary btn-lg"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
      </div>
    </div>
  </div>
</div>

@endsection
</div>



















<!-- ProductDescription -->
       <!--  <section class="ProductDescription">
            <div class="container">
            	@foreach($products as $product)
                <div class="row">
                    <div class="col-md-7">
                        <div class="box-content-shaded">
                            <div class="product-preview-block">
                                <ul id="etalage">
                                    <li>
                                        <a href="#">
                                            <img class="etalage_thumb_image" src="{{asset('/').$product->image}}" />
                                            <img class="etalage_source_image" src="{{ $product->image }}" /> 
                                        </a>
                                    </li>
                                     <li>
                                        <img class="etalage_thumb_image" src="{{ $product->image }}" />
                                        <img class="etalage_source_image" src="{{ $product->image }}" />
                                    </li> 
								</ul>
                            </div>
						</div>
					</div>
					
                    <div class="col-md-5">
                        <div class="ProdDesc-Text">
                            <h3>{{ $product->title[$language] }}</h3>
                            <div class="FrameworkWrapper">
                                <p class="Framework">
                                    <i class="fa fa-wordpress"></i> {{ $product->subtitle[$language] }}</p>
                            </div>
                            <span class="productdiscription more">
                                {{ $product->body[$language] }}
                            </span>
                            <div class="space5"></div>
                           	<div class="TotPriceWrapper">
                            <span>{{ __('msg.Price') }}</span>
                            <span class="TotPrice">$ {{ $product->product_price }}</span>
                        	</div>
                            <div class="LiveDemo">
                                <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="addtocart-btn">
                                    <i class="fa fa-shopping-cart"></i>{{ __('msg.Add To Cart') }}</a>
                            </div>
                            <hr>
                        </div>
                    </div>
				</div>
            	@endforeach

            </div> 
        </section>-->
<!-- ProductDescription -->

