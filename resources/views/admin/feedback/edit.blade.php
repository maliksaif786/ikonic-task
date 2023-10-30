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
                                                        <h4>Update Feedback</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <form method="post" action="{{url('feedback/update/'.$feedback->id)}}">
                                           @csrf
                                            <div class="widget-content widget-content-area">
                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group mb-2">
                                                                <label class="col-form-label">Title</label>
                                                                <input type="text" class="form-control" name="title" value="{{$feedback->title}}" required>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group mb-2">
                                                                <label class="col-form-label">Category</label>
                                                                <select name="category_id" class="form-control">
                                                                    @foreach($categories as $category)
                                                                    <option value="{{$category->id}}" <?php if($category->id == $feedback->id) echo'selected';  ?>>{{$category->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group mb-2">
                                                                <label class="col-form-label">Descriptio </label>
                                                                <textarea name="description" class="form-control"  cols="30" rows="5" required>{{$feedback->description}}</textarea>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-footer text-right">
                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
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