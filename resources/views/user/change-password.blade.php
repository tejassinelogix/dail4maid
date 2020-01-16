@extends('layouts.user-master')

@section('title')
User Change Password
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
            <form method="POST" action="{{ route('changePassword') }}">
            @csrf
            <div class="col-md-10 col-sm-10">
                <h3 class="headingFull"><span>Change Password</span></h3>
                <div class="modal-form-block"> 
                    
                    <div class="clear col-md-2">
                        <label class="control-label" for="">Password</label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required="">
                        </div>
                    </div>
                    <div class="clear col-md-2">
                        <label class="control-label" for="">Confirm Password</label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input id="password-confirm" type="password" name="password_confirmation" required="">
                        </div>
                    </div>
                     <input type="hidden" value="{{ Auth::user()->id }}" id="user_id" name="user_id">
                    <div class="clear col-md-offset-2 col-md-4">
                        <button type="submit" class="btn btn-primary btn-rounded btn-lg">Submit <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="space30"></div>

@endsection
