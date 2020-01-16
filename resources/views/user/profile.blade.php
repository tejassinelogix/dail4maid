@extends('layouts.user-master')

@section('title')
User Profile
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
                <h3 class="headingFull"><span>My Profile</span></h3>
                <div class="addressShippingSelect">
                    <a class="pull-right btn btn-default2 btn-rounded zindexBtn" href="#" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i> Edit</a>
                    <h5><i class="fa fa-user"></i> {{ $user['name'] }}</h5>
                    <p><i class="fa fa-envelope"></i> Email: {{ $user['email'] }}</p>
                    @if (!empty($profile))
                    <p><i class="fa fa-phone"></i> Phone: <strong>{{ $profile['contact'] }}</strong></p>
                    <p><i class="fa fa-phone"></i> Company: {{ $profile['company'] }}</p>
                    <p><i class="fa fa-phone"></i> Address: {{ $profile['address'] }}</p>
                    <p><i class="fa fa-phone"></i> State: {{ $profile['state'] }}</p>
                    <p><i class="fa fa-phone"></i> Country: {{ $profile['country'] }}</p>
                    <p><i class="fa fa-phone"></i> Locality: {{ $profile['locality'] }}</p>
                    <p><i class="fa fa-phone"></i> Pin Code: {{ $profile['pin_code'] }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space30"></div>

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit My Profile</h4>
            </div>
            <div class="modal-body">
                <div class="modal-form-block"> 
                    <div class="col-sm-6">
                        <!-- Text input-->
                        <div class="form-group">                    
                            <label class="control-label" for="textinput">Name</label>              
                            <input class="p-r-25" name="textinput" required="" type="text" value="{{ $user['name'] }}">                  
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="textinput">Email</label>
                            <input class="p-r-25" name="textinput" required="" type="email" value="{{ $user['email'] }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- Text input-->
                        <div class="form-group">                    
                            <label class="control-label" for="textinput">Contact</label>              
                            <input class="p-r-25" name="textinput" required="" type="text" value="{{ $profile['contact'] }}">                  
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="textinput">Company</label>
                            <input class="p-r-25" name="textinput" required="" type="email" value="{{ $profile['company'] }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- Text input-->
                        <div class="form-group">                    
                            <label class="control-label" for="textinput">Address</label>              
                            <input class="p-r-25" name="textinput" required="" type="text" value="{{ $profile['address'] }}">                  
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="textinput">State</label>
                            <input class="p-r-25" name="textinput" required="" type="email" value="{{ $profile['state'] }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- Text input-->
                        <div class="form-group">                    
                            <label class="control-label" for="textinput">Address</label>              
                            <input class="p-r-25" name="textinput" required="" type="text" value="{{ $profile['country'] }}">                  
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="textinput">Locality</label>
                            <input class="p-r-25" name="textinput" required="" type="email" value="{{ $profile['locality'] }}">
                        </div>
                    </div>
<!--                    <div class="col-sm-6">
                         Text input
                        <div class="form-group">                  
                            <label class="control-label" for="textinput">Password</label> 
                            <input class="p-r-25" name="textinput" required="" type="password" value="123456789">
                        </div>
                    </div>-->
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="textinput">Pin Code</label>
                            <input class="p-r-25" name="textinput" required="" type="text" value="{{ $profile['pin_code'] }}">
                        </div>
                    </div>
                </div>
            </div><!-- end modal body -->
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary btn-lg btn-rounded" value="Update"/>          
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- end modal content -->
    </div>
</div><!-- end modal -->


 <!-- All Product -->
        <!-- <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>{{ __('msg.Dashboard') }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active"><a href="#">{{ __('msg.Dashboard') }}</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">{{ __('msg.Dashboard') }}</strong>
                            </div>
                            <div class="card-body card-block">
                                 @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                 You are logged in as <strong>{{ __('msg.User') }}</strong>
                                
                            </div>
                        </div>
                    </div>
                </div> -->
            <!-- </div> -->
            <!-- .animated 1-->

        <!-- </div> -->
        <!-- .content -->
        <!-- All Product -->

@endsection
