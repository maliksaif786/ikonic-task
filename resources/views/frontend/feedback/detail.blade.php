@extends('frontend.layouts.master')
@section('content')

<main role="main">
      <!-- START RATING SECTION  -->
      <div class="rating-section">
        <div class="container">
          <div class="row">
           
            <div class="col-md-12">
              <div class="rating-right">
                <!-- START TOP RIGHT SECTION -->
                <div class="right-top">
                  <div class="row">
                    <div class="col-md-6">
                     
                      <h2>{{$feedback->title}}</h2>
                      <!-- <p class="desc">Lorem ipsum dolor sit amet</p> -->
                      <div class="short-desc">
                        <p>
                            {{$feedback->description}}
                        </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="rating-buttons">
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#writeComment">
                        Write Comment
                        </button>
                        
                        <button class="btn btn-outline-warning">
                        <span>Vote {{$feedbackCount}}</span>
                        </button>
                        <form action="{{url('add_vote')}}" method="post">
                            @csrf
                            <input type="hidden" name="feedback_id" value="{{$feedback->id}}">
                        <button type="submit" class="btn btn-outline-warning">
                         <span>Add Vote</span>
                        </button>
                        </form>
                      </div>
                    
                    </div>
                  </div>
                </div>
                <!-- /END TOP RIGHT SECTION -->

                <!-- write comment model -->
                @include('frontend.feedback.inc.write_comment')
                <!-- / write comment mode -->

                <!-- START USER REVIEWS SECTION -->
                <div class="reviews-sec">
                  <div class="reviews-top">
                    <div class="heading">
                      <h5>
                        User Comments 
                      </h5>
                    </div>
                    
                    </div>
                  </div>
                @if(count($comments) > 0)
                  <div class="reviews-wrapper">
                    <!-- START USER REVIEW -->
                    @foreach($comments as $comment)
                    <div class="review">
                      <div class="review-image">
                        <img src="{{asset('frontend-theme/assets/img/user.png')}}" />
                        <div class="date">
                          <span>{{ $comment->created_at->format('d F Y') }}</span>
                          <br>
                          <span>{{ $comment->created_at->format('g:i A') }}</span>
                        </div>
                      </div>
                
                      <p class="title">{{$comment->user->name}}</p>
                      <p class="desc">
                      {{$comment->comment}}
                      </p>
                    </div>
                    @endforeach
                    <!-- /END USER REVIEW -->
                  </div>
                  {{ $comments->links() }}
                </div>
                @else
                <p>No Comments </p>
                @endif
                <!-- /END USER REVIEWS SECTION -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /END RATING SECTION -->
    </main>

@endsection