@extends('layouts.admin-master')

@section('title')
Admin Dashboard
@endsection

@section('content')
        
        <!-- All Product -->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>{{ __('msg.Admin Dashboard') }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active"><a href="#">{{ __('msg.Admin Dashboard') }}</a></li>

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
                                <strong class="card-title">{{ __('msg.Super Admin Dashboard') }}</strong>
                            </div>
                            <div class="card-body card-block">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                            <!-- You are logged in as <strong>{{ __('msg.Super Admin') }}</strong> -->
                            <!-- form start -->
                            <form role="form" action="{{ route('admin.update-user-profile') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @foreach ($users as $user)
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title">Clients Name</label>
                                        <input name="name" type="text" class="form-control" id="title" value="{{ $user->name }}" readonly="readonly">
                                    </div>
                                </div>                                

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title">Email</label>
                                        <input name="email" type="text" class="form-control" id="title" value="{{ $user->email }}" placeholder="" readonly="readonly">
                                    </div>
                                </div> 
                                
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="Phone">Phone Number</label>
                                    <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ $user->contact }}" name="phone" required>
                                    @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" value="{{ $user->address }}" name="address" required>
                                        @if ($errors->has('address'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('address') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" value="{{ $user->city }}" name="city" required>
                                        @if ($errors->has('city'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('city') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="state">Emirates</label>
                                        <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" value="{{ $user->state }}" name="state" required>
                                        @if ($errors->has('state'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('state') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" value="{{ $user->country }}" name="country" required>
                                        @if ($errors->has('country'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('country') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="pin_code">Pin Code</label>
                                        <input id="pin_code" type="text" class="form-control{{ $errors->has('pin_code') ? ' is-invalid' : '' }}" value="{{ $user->pin_code }}" name="pin_code" required>
                                        @if ($errors->has('pin_code'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('pin_code') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                	<input name="user_id" type="hidden" value="{{ $user->id }}" placeholder="">
                                	
                                    <button type="submit" class="btn btn-primary">Submit <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                                  <!-- /.box -->
                                  @endforeach   
                            </form>

                            </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div><!-- .animated 1-->
            
    </div>
        <!-- All Product -->

@endsection
