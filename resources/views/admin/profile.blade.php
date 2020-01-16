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
                    <li><a href="index.html">Admin Profile Page</a></li>
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
                        <strong class="card-title">{{ __('msg.Admin Dashboard') }}</strong>
                    </div>
                    <div class="card-body card-block">
                        @if (session('successMessage'))
                        <div class="alert alert-success" role="alert">
                            {{ session('successMessage') }}
                        </div>
                        @endif
                        <form method="post" action="{{ route('admin.update-profile') }}" enctype="multipart/form-data"> 
                            {{ csrf_field()}}
                            
                            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="title"> {{ __('msg.Name') }}</label>
                                    <input name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="title" value="{{ Auth::user()->name }}" placeholder="">
                                    @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div> 
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="title"> {{ __('msg.Email') }}</label>
                                    <input name="email" readonly="" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="title" value="{{ Auth::user()->email }}" placeholder="">
                                    @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="Phone">Phone</label>
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
                                <button type="submit" class="btn btn-primary">{{ __('msg.Save') }} <i class="fa fa-arrow-circle-right"></i></button>
                                <button type="reset" class="btn btn-primary">{{ __('msg.Cancel') }} <i class="fa fa-times-circle-o"></i></button>
                            </div>
                        </form>
<!--                                 You are logged in as <strong>{{ __('msg.Admin') }}</strong>-->

                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated 1-->

</div><!-- .content -->
<!-- All Product -->

@endsection
