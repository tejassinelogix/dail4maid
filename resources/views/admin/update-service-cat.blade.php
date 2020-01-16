@extends('layouts.admin-master')

@section('title')
Admin Update Service Category
@endsection

@section('content')
        
        <!-- All Product -->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Update Category
                            <!--{{ __('msg.Super Admin Dashboard') }}-->
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.html">Update Service Category</a></li>
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

                            <!-- You are logged in as <strong>{{ __('msg.Super Admin') }}</strong> -->
                            <!-- form start -->
                            <form role="form" action="#" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title">Category Name</label>
                                        <input name="CategoryName" type="text" class="form-control" id="title" value="LAUNDRY" placeholder="">
                                    </div>
                                </div>                                

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="productprice">Image</label>
                                        <img src="http://dfm.demosoftwares.biz/public/category_images/Services.png" alt="" style="width: 100px; height: 100px;" />
                                        <input type="file" id="file-input" name="image" class="form-control-file">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="CategoryDesc" class="form-control" placeholder="" rows="5">LAUNDRY</textarea>
                                    </div> 
                                </div>

                                <div class="col-lg-6">
                                    <button type="button" class="btn btn-primary">Submit <i class="fa fa-arrow-circle-right"></i></button>
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
