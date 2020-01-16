<!-- navigationBar -->
  <div class="navigationBar">
    <div class="topHeader">
      <div class="containerWrapper">
        <div class="row">
          <div class="col-md-2 col-sm-2">
            <a href="{{ url('/') }}" class="logo"><img src="{{ URL::to('public/assets/images/logo.png') }}" alt="" /></a>
          </div>
          <div class="col-sm-5">
              <div class="searchbox">
                <input type="text" placeholder="Search for Products">
                <button><i class="fa fa-search"></i></button>
              </div>
            </div>
          <div class="col-sm-5">
            <div class="mycartContainer">
              
              <div class="myAccount">
                <ul class="nav navbar-nav navbar-right">
                @guest
                  <li><a href="{{ route('login') }}">{{ __('msg.Login') }}</a></li>
                  @if (Route::has('register'))
                   <li><a href="{{ route('register') }}">{{ __('msg.Register') }}</a></li>
                  @endif
                 @else
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ route('dashboard') }}">{{ __('msg.my account') }}</a></li>
                      <li><a href="{{ route('profile') }}">{{ __('msg.profile') }}</a></li>
                      <li>
                      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('msg.Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </li>
                    </ul>
                 </li>
                 @endguest
               <li><select class="language" id="Locale" name="Locale">
                        <option value="0">Language</option>
                        <option value="en">English</option>
                        <option value="in">Hindi</option>
                        <option value="ar">Arabic</option>
                    </select></li>
                <!-- <a href="#"><i class="fa fa-user"></i> My Account</a> -->
                <!-- <li><a href="{{ url('/locale/en') }}" style="margin: 0px; padding: 0px;"><img class="flag" src="{{asset('images/eng.png')}}"></a></li>
                <li><a href="{{ url('/locale/in') }}" style="margin: 0px; padding: 0px;"><img class="flag" src="{{asset('images/hin.png')}}"></a></li>
                <li><a href="{{ url('/locale/ar') }}" style="margin: 0px; padding: 0px;"><img class="flag" src="{{asset('images/ar.png')}}"></a></li> -->
               
              </ul>
              </div>
                  <div class="mycartbox">
                    <div class="mycarthead"><i class="fa fa-shopping-cart"></i> {{ __('msg.shopping cart') }} <i class="fa fa-angle-down"></i> 
                        @if(Session::has('cart'))
                          <span>
                            {{ Session::has('cart') ? Session::get('cart')->totalQty :'' }}
                          </span>
                        @endif
                        <ul>
                          @if(Session::has('cart'))
                          <?php $cart = Session::get('cart'); ?>
                          <div class="empty-cartmsg">
                            <p>Cart Items<br></p>

                            <ul class="list-group">
                              @foreach($cart->items as $product)
                                <li class="list-group-item">
                                  <span class="badge">{{ $product['qty'] }}</span>
                                  <strong>{{ $product['item']['title'][$language] }}</strong>
                                  <span class="label label-success">$ {{ $product['item']['product_price'] }}</span>
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown"> {{ __('msg.action') }}  <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="{{ route('product.increaseByOne', ['id' => $product['item']['id'] ]) }}">{{ __('msg.increase by 1') }}</a></li>
                                      <li><a href="{{ route('product.reduceByOne', ['id' => $product['item']['id'] ]) }}">{{ __('msg.reduce by 1') }}</a></li>
                                      <li><a href="{{ route('product.remove', ['id' => $product['item']['id'] ]) }}">{{ __('msg.reduce all') }}</a></li>
                                    </ul>
                                  </div>
                                </li>
                              @endforeach
                              
                              <p><strong style="margin-right: 10px; ">{{ __('msg.total') }} : {{ $cart->totalPrice }}</strong><a href="{{ route('product.shoppingCart') }}">{{ __('msg.shopping cart') }}</a></p>
                            </ul>
                          </div>
                           @else
                          <div class="empty-cartmsg">
                            <p>Your Shopping Cart is empty <br> <a href="index.html">Start shopping now!</a></p>
                          </div>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="navigationBarContent">
        <div class="containerWrapper">
          <nav role="navigation" class="navbar navbar-default">
              <div class="navbar-header">
                  <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
              </div>
              <div id="navbarCollapse" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                      <li><a href="#">Cups / Mugs</a></li>
                      <li><a href="#">Photo Gifts</a></li>
                      <li><a href="#">Printed Clothing</a></li>
                      <li><a href="#">Pens</a></li>
                      <li><a href="#">Photo Albums</a></li>
                      <li><a href="#"><i class="fa fa-bars"></i> More <i class="fa fa-angle-down"></i></a>
                        <ul>
                          <li><a href="#">Business Cards</a></li>
                          <li><a href="#">Calendars</a></li>
                          <li><a href="#">Corporate Gifts</a></li>
                        </ul>
                      </li>
                  </ul>
              </div>
          </nav>
      </div><!-- navigationBarContent -->
    </div>
  </div><!-- End of navigationBar -->

