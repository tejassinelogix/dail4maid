@extends('layouts.user-master')

@section('title')
User Dashboard
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
                    <h5><i class="fa fa-user"></i> John Elton</h5>
                    <p><i class="fa fa-envelope"></i> Email: johnelton@example.com</p>
                    <p><i class="fa fa-lock"></i> Password: **********</p>
                    <p><i class="fa fa-phone"></i> Phone: <strong>97655 97655</strong></p>
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
                            <input class="p-r-25" name="textinput" required="" type="text" value="John Elton">                  
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="textinput">Email</label>
                            <input class="p-r-25" name="textinput" required="" type="email" value="johnelton@example.com">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- Text input-->
                        <div class="form-group">                  
                            <label class="control-label" for="textinput">Password</label> 
                            <input class="p-r-25" name="textinput" required="" type="password" value="123456789">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="textinput">Phone</label>
                            <input class="p-r-25" name="textinput" required="" type="text" value="97655 97655">
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
