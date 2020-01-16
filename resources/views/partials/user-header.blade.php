<!-- navigationBar -->
  <div class="navigationBar">
    <div class="topHeader">
      <div class="containerWrapper">
        <div class="row">
          <div class="col-md-2 col-sm-2">
            <a href="{{ url('/') }}" class="logo"><img src="{{ URL::to('public/backend/images/logo.png') }}" alt="" /></a>
          </div>
          <div class="col-sm-5">
              
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
                      <li><a href="{{ route('profile') }}">{{ __('msg.my account') }}</a></li>
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
               
                <!-- <a href="#"><i class="fa fa-user"></i> My Account</a> -->
                <!-- <li><a href="{{ url('/locale/en') }}" style="margin: 0px; padding: 0px;"><img class="flag" src="{{asset('images/eng.png')}}"></a></li>
                <li><a href="{{ url('/locale/in') }}" style="margin: 0px; padding: 0px;"><img class="flag" src="{{asset('images/hin.png')}}"></a></li>
                <li><a href="{{ url('/locale/ar') }}" style="margin: 0px; padding: 0px;"><img class="flag" src="{{asset('images/ar.png')}}"></a></li> -->
               
              </ul>
              </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div><!-- End of navigationBar -->

