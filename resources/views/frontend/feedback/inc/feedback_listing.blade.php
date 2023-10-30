@foreach($feedbacks as $feedback)
<div class="col-6 col-lg-4">
   <div class="feedback">
      <div class="product-desc"> 
        <div class="hover-content">
            <a href="{{url('feedback_detail/'.$feedback->id)}}"><button class="btn btn-primary">View Feedback and Comments</button></a>
        </div>
        </div>
        <p class="feedback-title"><b>{{$feedback->title}}</b>
        <p class="feedback-title"><b>{{$feedback->category->name}}</b>
        </p> <p class="desc"> {{ implode(' ', array_slice(str_word_count($feedback->description, 1), 0, 5 )) . ' ...' }}
        </p> <div class="product-bottom">
        @php
            $voteCount = \App\Models\FeedbackCount::where('feedback_id', $feedback->id)->count();
        @endphp
        <div class="left"><span>
        {{$voteCount}} vote
    </div>
    <div class="right">
        {{$feedback->user->name}}
    </div>
</div>
</div>
</div>

@endforeach