@extends('admin.layouts.master')
@section('content')

<!--  Navbar Starts / Breadcrumb Area  -->
<div class="sub-header-container">
    <header class="header navbar navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
            <i class="las la-bars"></i>
        </a>
        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">All Feedbacks</a></li>
                        </ol>
                    </nav>
                </div>
            </li>
        </ul>
    </header>
</div>
<!--  Navbar Ends / Breadcrumb Area  -->

<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

    <div class="widget-content widget-content-area br-6">
        
        <h4 class="table-header">Feedbacks</h4>

        <div class="table-responsive mb-4">
            <table id="basic-dt" class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th class="no-content"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feedbacks as $feedback)
                    <tr>
                        <td>{{$feedback->id}}</td>
                        <td>{{$feedback->user->name}}</td>
                        <td>{{$feedback->category->name}}</td>
                        <td>{{$feedback->title}}</td>
                        <td>
                                <a style="padding:3px; width:56px" href="{{url('/feedback/'.$feedback->id.'/edit')}}" class="btn btn-info m-1 btn-sm">Edit</a>
                                <a style="padding:3px; width:56px" href="{{url('feedback/delete/'.$feedback->id)}}" class="btn btn-danger m-1 btn-sm">Delete</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th class="no-content"></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    @endsection