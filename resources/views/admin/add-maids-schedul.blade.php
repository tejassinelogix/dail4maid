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
                                <strong class="card-title">{{ __('msg.Admin Dashboard') }}</strong>
                            </div>
                            <div class="card-body card-block">
                                @if (session('successMessage'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('successMessage') }}
                                    </div>
                                @endif
                        
                        <div class="card-body">
                            <!--<form method="POST" action="{{ route('admin.maidCreate') }}">-->
                                <!--<form action="" method="post" class="form-horizontal">-->
                                @csrf

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label for="Maid name">Maid name</label>
                                    
                                    
                                        <select name="maidname" id="name" class="form-control" >
                                            <option value="volvo">select</option>
                                            <option value="saab">amol</option>
                                            <option value="opel">appa</option>
                                          
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label for="Service">Service</label>
                                        <select name="service" id="service" class="form-control" >
                                            <option value="volvo">select</option>
                                            <option value="saab">LAUNDRY</option>
                                            <option value="opel">SOFA CLEANING</option>
                                          
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label for="Location">Location</label>
                                        <input id="location" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label for="From">Date</label>
                                        <input id="date" type="date" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label for="From">From</label>
                                        <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label for="To">To</label>
                                        <input id="password" type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                
                                
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary pull-right">
                                        {{ __('msg.Register') }}
                                    </button>
                                </div>
                                                                    
                            <!--</form>-->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>
        <!-- All Product -->

@endsection
