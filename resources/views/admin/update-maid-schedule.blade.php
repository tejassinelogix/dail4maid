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
                            <strong class="card-title">Appointment</strong>
                        </div>
                        @foreach ($maids as $maid)
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3 class="headingFull">Cleaning Details:</h3>
                                    <div class="row col2Forms">                                        
                                        <div class="col-sm-6">
                                            <div class="formgroup">
                                                <label>How often do you need the cleaner?</label>
                                                <br>
                                                <lable>{{ $maid->c_days }}</lable>
                                                <!--<input type="text" name="" class="form-control" value="One-off">-->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="formgroup">
                                                <label>How many cleaners do you need?</label>
                                                <br>
                                                <lable>{{ $maid->c_qty }}</lable>
                                                <!--<input type="text" name="" class="form-control" value="1">-->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="formgroup">
                                                <label>Do you require cleaning materials?</label>
                                                <br>
                                                <lable>{{ $maid->c_material }}</lable>
                                                <!--<input type="text" name="" class="form-control" value="No, I have them">-->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="formgroup">
                                                <label>Do you have any speciﬁc cleaning instructions?</label>
                                                <br>
                                                <lable>{{ $maid->c_instruction }}</lable>
                                                <!--<input type="text" name="" class="form-control" value="Speciﬁc requirements">-->
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="headingFull">Date & Time:</h3>
                                    <div class="row col2Forms">
                                        <div class="col-sm-6">
                                            <div class="formgroup">
                                                <label>How long do you need your cleaner to stay?</label>
                                                <br>
                                                <lable>{{ $maid->c_stay_hours }}</lable>
                                                <!--<input type="text" name="" class="form-control" value="2">-->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="formgroup">
                                                <label>When would you like your cleaning?</label>
                                                <br>
                                                <lable>{{ $maid->c_date }}</lable>
                                                <!--<input type="text" name="" class="form-control" value="11/05/2019">-->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="formgroup">
                                                <label>What time would you like us to start?</label>
                                                <br>
                                                <lable>{{ $maid->c_time_slot }}</lable>
                                                <!--<input type="text" name="" class="form-control" value="10:55am">-->
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="headingFull">Contact Information:</h3>
                                    <div class="row col2Forms">
                                        <div class="col-sm-6">
                                            <div class="formgroup">
                                                <label>Select your City</label>
                                                <br>
                                                <lable>{{ $maid->region }}</lable>
                                                <!--<input type="text" name="" class="form-control" value="Dubai">-->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="formgroup">
                                                <label>Select your region</label>
                                                <br>
                                                <lable>{{ $maid->region }}</lable>
                                                <!--<input type="text" name="" class="form-control" value="Dubai">-->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="formgroup">
                                                <label>Enter your address details</label>
                                                <br>
                                                <lable>{{ $maid->address }}</lable>
                                                <!--<input type="text" name="" class="form-control" value="Somewhere in Dubai">-->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="formgroup">
                                                <label>Enter your full name</label>
                                                <br>
                                                <lable>{{ $maid->name }}</lable>
                                                <!--<input type="text" name="" class="form-control" value="John Snow">-->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="formgroup">
                                                <label>Mobile Number</label>
                                                <br>
                                                <lable>{{ $maid->contact }}</lable>
<!--                                                <input type="text" name="" class="form-control" value="+971 97655 97655">-->
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="headingFull">How would you like to pay?:</h3>
                                    <div class="row col2Forms">
                                        <div class="col-sm-6">
                                            <div class="formgroup">
                                                <label>Pay by credit / debit card</label>
                                                <br>
                                                <lable>{{ $maid->pay_method }}</lable>
                                                <!--<input type="text" name="" class="form-control" value="$40">-->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="formgroup">
                                                <label>Status</label>
                                                <br>
                                                <lable>{{ $maid->status }}</lable>
                                                <!--<input type="text" name="" class="form-control" value="Paid by Credit Card">-->
                                            </div>
                                        </div>
<!--                                        <div class="col-sm-6">
                                            <div class="formgroup">
                                                <label>Pay with cash</label>
                                                <input type="text" name="" class="form-control" value="Paid by Credit Card">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="formgroup">
                                                <label>Charges</label>
                                                <input type="text" name="" class="form-control" value="AED 148">
                                            </div>
                                        </div>-->
                                    </div>
                                      
                                    <form role="form" action="#" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <h3 class="headingFull">Assign TO:</h3><br>
                                    <div class="row col2Forms">
                                        <div class="col-sm-6">
                                            <select name="maidname" value="" id="name" class="form-control" multiple="">
                                                <option>Select</option>
                                                @foreach ($maids1 as $maid1)
                                                <option value="$maid1->id">{{ $maid1->name }}</option>
                                                @endforeach
                                            </select> 
                                            
                                           
                                        @foreach ($maids1 as $maid1)
                                            <label class="Checkboxcontainer"> {{ $maid1->name }}
                                                <input type="checkbox" name="name[]" value={{ $maid1->id }}>
                                                <span class="checkmark"></span>
                                            </label>
                                        @endforeach
                                     
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="button" class="btn btn-primary">Submit <i class="fa fa-arrow-circle-right"></i></button>
                                        </div>
                                    </div
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach 
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>
        <!-- All Product -->

@endsection
