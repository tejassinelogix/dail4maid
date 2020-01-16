@extends('layouts.admin-master')

@section('title')
Admin | Add Service Category
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
                            <li><a href="index.html">Service Category</a></li>
                            <li class="active"><a href="#">{{ __('msg.Admin') }}</a></li>
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

                            <!-- You are logged in as <strong>{{ __('msg.Super Admin') }}</strong> 
                                
                                -->
                            <!-- form start -->
                            <form role="form" action="{{ route('admincategory.add-service-category') }}" method="post" enctype="multipart/form-data">
                                <!--<form role="form" action="#" method="post" enctype="multipart/form-data">-->
                                {{ csrf_field() }}

                               <!--   @foreach($errors->all() as $error)
                                    <p class="alert alert-danger">{{ $error }}</p>
                                @endforeach -->

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title">Category Name</label>
                                        <input name="CategoryName" type="text" class="form-control{{ $errors->has('CategoryName') ? ' is-invalid' : '' }}" id="title"  placeholder="">

                                        @if ($errors->has('CategoryName'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('CategoryName') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>                                

<!--                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="productprice">Meta Title</label>
                                        <input type="text" class="form-control{{ $errors->has('MetaTitle') ? ' is-invalid' : '' }}" id="metatitle" name="MetaTitle" placeholder="">
                                        @if ($errors->has('MetaTitle'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('MetaTitle') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>                                -->
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="ServicePrice">Price</label>
                                        <input name="ServicePrice" type="text" class="form-control{{ $errors->has('Price') ? ' is-invalid' : '' }}" id="title"  placeholder="">

                                        @if ($errors->has('Price'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('Price') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>   
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="productprice">Image</label>
                                        <input type="file" id="file-input" name="image" class="{{ $errors->has('image') ? 'form-control is-invalid' : 'form-control-file' }}">

                                       @if ($errors->has('image'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

<!--                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="productprice">Meta Keyword</label>
                                        <input name="MetaKeyword" type="text" class="form-control{{ $errors->has('MetaKeyword') ? ' is-invalid' : '' }}" id="metakeyword"  placeholder="">
                                        @if ($errors->has('MetaKeyword'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('MetaKeyword') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>-->

<!--                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="CategoryDesc" class="form-control{{ $errors->has('CategoryDesc') ? ' is-invalid' : '' }}" placeholder="" rows="5"></textarea>
                                        @if ($errors->has('CategoryDesc'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('CategoryDesc') }}</strong>
                                            </span>
                                        @endif
                                    </div> 
                                </div>-->

<!--                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="productprice">Meta Description</label>
                                        <textarea name="MetaDescription" class="form-control{{ $errors->has('MetaDescription') ? ' is-invalid' : '' }}" placeholder="" rows="5"></textarea>
                                        @if ($errors->has('MetaDescription'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('MetaDescription') }}</strong>
                                            </span>
                                        @endif
                                    </div>  
                                </div>-->
                               
                                                            


                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">Submit <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                                  <!-- /.box -->
                            </form>

                            </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div><!-- .animated 1-->

        </div><!-- .content -->
        <!-- All Product -->

@endsection
