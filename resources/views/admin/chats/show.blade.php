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
            <h4 class="mt-0 font-18">#{{ $conversation->title }}
                ( Between you and
                        {{ $conversation->sender->name }}
                )</h4>
            @foreach($conversation->message as $message)
            <div class="media mt-4">
            <img class="mr-2 rounded-circle" src="{{asset('admin-theme/common-assets/img/profile-23.jpg')}}"
                    alt="Generic placeholder image" height="32">
                <div class="media-body">
                <h5 class="mt-0 mb-1 font-15">{{$message->user->name}}</a>
                        <small class="text-muted float-right font-11">
                            @php
                            $carbonDate = \Carbon\Carbon::parse($message->created_at);
                            @endphp
                            {{ $carbonDate->diffForHumans() }}
                        </small>
                    </h5>
                    <span class="font-13">{{$message->message}}.</span>

                </div>
            </div>
            @endforeach
            <form action="{{url('chat_reply')}}" method="post">
                @csrf
                <input type="hidden" name="conversation_id" value="{{$conversation->id}}">
                <div class="form-group mb-0 align-items-center d-flex mt-5">
                    <textarea name="message" placeholder="Type here" class="form-control" required=""></textarea>
                    <button class="ml-2 btn-sm btn btn-success bg-gradient-primary" type="submit">send</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
