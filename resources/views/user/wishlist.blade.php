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
                <h3 class="headingFull"><span><i class="fa fa-heart"></i> My Wishlist</span></h3>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="productBlock">
                            <a href="product-details.php" class="productBlockImg">
                                <div style="background: url('{{ asset('/') }}public/assets/images/product1.jpg') no-repeat;"></div>
                            </a>
                            <div class="productBlockInfo">
                                <h3 class="protitle">Set amet lorem ipsum bouquet</h3>
                                <ul class="proRating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half-o"></i></li>
                                </ul>
                                <h2 class="propricing">$250.00</h2>
                                <p class="proinfo">Earliest Delivery: Today</p>
                            </div>
                            <div class="productBlockViewDtl">
                                <a href="product-details.php" class="btn1">View details <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="#" class="btn2">Buy Now <i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="removeWishlist">
                            <a href="#" class="btn btn-default2 btn-rounded"><i class="fa fa-trash"></i> Remove from Wishlist</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="productBlock">
                            <a href="product-details.php" class="productBlockImg">
                                <div style="background: url('{{ asset('/') }}public/assets/images/product2.jpg') no-repeat;"></div>
                            </a>
                            <div class="productBlockInfo">
                                <h3 class="protitle">Set amet lorem ipsum bouquet</h3>
                                <ul class="proRating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half-o"></i></li>
                                </ul>
                                <h2 class="propricing">$250.00</h2>
                                <p class="proinfo">Earliest Delivery: Today</p>
                            </div>
                            <div class="productBlockViewDtl">
                                <a href="product-details.php" class="btn1">View details <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="#" class="btn2">Buy Now <i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="removeWishlist">
                            <a href="#" class="btn btn-default2 btn-rounded"><i class="fa fa-trash"></i> Remove from Wishlist</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space30"></div>

@endsection
