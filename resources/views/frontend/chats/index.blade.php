@extends('frontend.layouts.master')
@section('content')
<main role="main"> 
  <!-- START TOP SECTION --> 
  <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 ml-auto">
                <div class="top-section">
                  <div class="bar">
                    <img src="{{ asset('frontend-theme/assets/img/logo.webp')}}" />
                  </div>
                </div>
            </div>
        </div>
    </div>


    <!-- /END THE TOP SECTION -->
      <div class="listing-section">
        <div class="container">
          <div class="row">
            <!-- START LEFT FILTER SECTION -->
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4 col-lg-3">
                  <div class="top">
                    <span><img src="{{asset('frontend-theme/assets/img/shape.png')}}" /></span>
                    <p>Conversation</p>
                  </div>
                </div>
                <div class="col-md-4 col-lg-3">
              
                </div>
                <div class="col-md-4 col-lg-3">
                @if(isset(Auth::user()->id))
                  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#writeMessage">
                    Write Message
                  </button>
                  @else          
                  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#login">
                  Write Message
                  </button>
                    @endif
                </div>
              </div>
            </div>

            <!-- add writeMessage -->
            <div class="modal fade" id="writeMessage">
              <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Write Message</h5>
                    <button type="button" class="close" data-dismiss="modal">
                      <span>&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ url('chat_store')}}" method="post">
                      @csrf
                   
                      <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" placeholder="Enter Title" name="title" required>
                      </div>
                      <div class="form-group">
                        <label for="description">Message</label>
                        <textarea name="message" class="form-control" placeholder="Message" cols="10" rows="5" required></textarea>
                      </div>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  </form>
                </div>
                
              </div>
            </div>
            <!-- end add feedback -->

            <!-- login model -->
            <div class="modal fade" id="login">
              <div class="modal-dialog">
                @include('frontend.feedback.inc.login')
              </div>
            </div>
            <!-- end login -->

            

            <!-- START RIGHT Feedback SECTION -->
            <div class="col-md-12 col-lg-12">
              <div class="products-wrapper">
                <div class="row mt-3">
                 
                <!-- message -->
                @foreach($conversations as $conversation)
                <div class="col-12 col-lg-12">
                <div class="feedback">

                <div class="row">
                    <div class="col-md-5 col-lg-5">
                    <img style="border-radius: 50%; width:50px;" src="{{asset('avatar-place.png')}}" alt="user-profile">
                    <p class="feedback-title mt-3"><b>{{$conversation->receiver->name}}</b>
                    <p> {{ date('h:i:m d-m-Y', strtotime($conversation->message->last()->created_at)) }}</p>
                    </div>

                    <div class="col-md-7 col-lg-7">
                        <a href="{{url('message/'.$conversation->id)}}">
                    <p class="feedback-title"><b>{{$conversation->title}}</b></p></a>
                    <p> {{ $conversation->message->last()->message }}</p>
                    </div>

                </div>

                </div>
                </div>
                @endforeach
                <!-- /message -->

                </div>
              </div>
              <!-- /END RIGHT Feedback SECTION -->
            </div>
            
          </div>
        </div>
        <div class="custom-pagination">
        
        </div>

</main>
@endsection