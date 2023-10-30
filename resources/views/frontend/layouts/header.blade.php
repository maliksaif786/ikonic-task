<!--START HEADER  -->
<header class="fixed-top">
      <nav class="navbar navbar-expand-md navbar-light bg-white bg-light musclehub-nav">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}"><img style="width:100px;" src="{{asset('frontend-theme/assets/img/logo.webp')}}" /></a>
            <button
              class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">

              @if(isset(Auth::user()->id))
              <li class="nav-item active">
                <a class="nav-link" href="{{url('messages')}}">Chat <span class="sr-only">(current)</span></a>
              </li>
              <li>
                <a><button class="btn btn-primary my-2 my-sm-0" type="submit">
                    {{Auth::user()->name}}
                  </button></a>
              </li>
              <!-- logout -->
              <li> 
                  <a class="account-item btn btn-danger  my-sm-0" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i>
                    <h6 class="font-13 mb-0 strong ">Logout</h6>
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
              </li>
              @else
              <li>
                <a href="{{url('login')}}"><button class="btn btn-primary my-2 my-sm-0" type="submit">
                    SIGN IN
                  </button></a>
              </li>
              @endif
            </ul>
         </div>
       </div>
     </nav>

</header>
<!-- /END THE HEADER -->