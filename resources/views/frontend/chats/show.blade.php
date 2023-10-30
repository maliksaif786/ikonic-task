@extends('frontend.layouts.master')
@section('content')
<main role="main"> 

    <!-- /END THE TOP SECTION -->
    <div class="listing-section">
        <div class="container">
          <div class="row">
            <!-- START RIGHT Feedback SECTION -->
            <div class="col-md-12 col-lg-12">
              <div class="products-wrapper">
                <div class="row mt-3">
                <div class="col-12 col-lg-12">
                <div class="feedback">
                <h3> <b>#{{ $conversation->title }}
                (    Between you and
                    @if ($conversation->sender_id == Auth::user()->id)
                        {{ $conversation->receiver->name }}
                    @else
                        {{ $conversation->sender->name }}
                    @endif
                )
            </b>
            </h3>
                @foreach($conversation->message as $message)
                <div class="row">
                    <div class="col-md-1 col-lg-1">
                    <img style="border-radius: 50%; width:50px;" src="{{asset('avatar-place.png')}}" alt="user-profile">
                    
                    </div>
                    <div class="col-md-7 col-lg-7">
                    <p class="feedback-title mt-3"><b>{{$message->user->name}}</b>
                    <p> {{ date('h:i:m d-m-Y', strtotime($message->created_at)) }}</p>
                    </div>
                </div>
                <p>{{$message->message}}</p>
                <hr>
                @endforeach
                <form class="pt-4" action="{{ url('message_reply') }}" method="POST">
                @csrf
                <input type="hidden" name="conversation_id" value="{{ $conversation->id }}">
                <div class="form-group">
                    <textarea class="form-control" rows="4" name="message" placeholder="Type your reply" required></textarea>
                </div>
                <div class="form-group mb-0 text-right">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
                </form>
                </div>
                </div>

                </div>
              </div>
            </div>
          </div>
        </div>
</main>
@endsection

@section('script')
    <script type="text/javascript">
    function refresh_messages(){
        $.post('{{ url('message.refresh') }}', {_token:'{{ @csrf_token() }}', id:'{{ encrypt($conversation->id) }}'}, function(data){
            $('#messages').html(data);
        })
    }

    refresh_messages(); // This will run on page load
    setInterval(function(){
        refresh_messages() // this will run after every 5 seconds
    }, 4000);
    </script>
@endsection
