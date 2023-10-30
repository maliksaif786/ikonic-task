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
                    <p>My Feedback</p>
                  </div>
                </div>
                <div class="col-md-4 col-lg-3"></div>
                <div class="col-md-4 col-lg-3">
                
                </div>
              </div>
            </div>

            <!-- add feedback -->
            <div class="modal fade" id="addFeedback">
              <div class="modal-dialog">
                @include('frontend.feedback.inc.add_feedback')
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
                  @include('frontend.feedback.inc.feedback_listing')
                </div>
              </div>
              <!-- /END RIGHT Feedback SECTION -->
            </div>
            
          </div>
        </div>
       

</main>
@endsection