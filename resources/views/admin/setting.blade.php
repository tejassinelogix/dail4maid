@extends('layouts.admin-master')

@section('title')
Admin Setting
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
                    <li><a href="index.html">Admin Setting</a></li>
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
                            <strong class="card-title">Settings</strong>
                        </div>
                        <div class="card-body">
                            @if (session('successMessage'))
                        <div class="alert alert-success" role="alert">
                            {{ session('successMessage') }}
                        </div>
                        @endif
                        <form method="post" action="{{ route('admin.update-setting') }}" enctype="multipart/form-data"> 
                            {{ csrf_field()}}
                            
                            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="title"> {{ __('msg.Name') }}</label>
                                    <input name="name" readonly="" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="title" value="{{ Auth::user()->name }}" placeholder="">
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
                                    <label for="password"> {{ __('msg.Password') }}</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div> 
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="password-confirm"> {{ __('msg.Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    
                                </div>
                            </div>
                           
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary">{{ __('msg.Save') }} <i class="fa fa-arrow-circle-right"></i></button>
                                <button type="reset" class="btn btn-primary">{{ __('msg.Cancel') }} <i class="fa fa-times-circle-o"></i></button>
                            </div>
                        </form>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>
<!-- All Product -->

@endsection
