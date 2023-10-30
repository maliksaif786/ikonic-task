@extends('admin.layouts.master')
@section('content')

<div class="layout-px-spacing">
                <div class="layout-top-spacing mb-2">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="container p-0">
                                <div class="row layout-top-spacing">
                                    <div class="col-lg-6 layout-spacing">
                                        <div class="statbox widget box box-shadow mb-4">
                                            <div class="widget-header bg-success">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Add Category</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <form method="post" action="{{route('categories.update',$category->id)}}">
                                            {{ csrf_field() }}
					                        {{ method_field('PATCH') }}
                                            <div class="widget-content widget-content-area">
                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                       
                                                            <div class="form-group mb-2">
                                                                <label class="col-form-label">Name</label>
                                                                <input type="text" class="form-control" name="name" placeholder="Please Enter Name" value="{{$category->name}}" required>
                                                                <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                                                            </div>
   
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-footer text-right">
                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                <button type="reset" class="btn btn-outline-primary">Cancel</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection