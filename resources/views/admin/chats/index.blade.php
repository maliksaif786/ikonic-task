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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Conversations Detail</a></li>
                        </ol>
                    </nav>
                </div>
            </li>
        </ul>
    </header>
</div>
<!--  Navbar Ends / Breadcrumb Area  -->

<!-- actions detail -->
<div class="col-md-12 mt-5">
    <div class="card d-block">
        <div class="card-body">
            <h4 class="mt-0 font-18">Conversations with User</h4>
            @php
            $count = count($conversations);
            @endphp
            @if($count > 0)
            @foreach($conversations as $conversation)
            <div class="media mt-4">
            <a href="{{url('chat',$conversation->id)}}"><img class="mr-2 rounded-circle" src="{{asset('admin-theme/common-assets/img/profile-23.jpg')}}"
                    alt="Generic placeholder image" height="32"></a>
                <div class="media-body">
                <a href="{{url('chat',$conversation->id)}}"><h5 class="mt-0 mb-1 font-15">{{$conversation->sender->name}}</a>
                        <small class="text-muted float-right font-11">
                            <a href="{{url('chat',$conversation->id)}}" class="btn btn-info btn-sm">details</a>
                            @php
                            $carbonDate = \Carbon\Carbon::parse($conversation->message->last()->created_at);
                            @endphp
                            {{ $carbonDate->diffForHumans() }}
                        </small>
                    </h5>
                    <span class="font-13">{{$conversation->message->last()->message}}.</span>
                </div>
            </div>
            @endforeach
            @else
            <p>No message</p>
            @endif

        </div>
    </div>
</div>

@endsection
