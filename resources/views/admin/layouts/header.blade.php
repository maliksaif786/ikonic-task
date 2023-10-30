  <!--  Navbar Starts  -->
  <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">
            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="index.html">
                        <img src="{{asset('admin-theme/common-assets/img/logo.png')}}" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a href="{{url('admin/dashboard')}}" class="nav-link"> Task </a>
                </li>
            </ul>
            <ul class="navbar-item flex-row ml-md-0 ml-auto">
                <li class="nav-item align-self-center search-animated">
                    <i class="las la-search toggle-search"></i>
                    <form class="form-inline search-full form-inline search" action="" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search here">
                        </div>
                    </form>
                </li>
            </ul>
            <ul class="navbar-item flex-row ml-md-auto">
                <li class="nav-item dropdown fullscreen-dropdown d-none d-lg-flex">
                    <a class="nav-link full-screen-mode" href="javascript:void(0);">
                        <i class="las la-compress" id="fullScreenIcon"></i>
                    </a>
                </li>
                
      
                <li class="nav-item dropdown user-profile-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <img src="{{ asset('admin-theme/common-assets/img/profile-16.jpg')}}" alt="avatar">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="nav-drop is-account-dropdown" >
                            <div class="inner">
                                <div class="nav-drop-header">
                                      <span class="text-primary font-15">Welcome Admin !</span>
                                </div>
                                <div class="nav-drop-body account-items pb-0">
                                    <a id="profile-link"  class="account-item" href="pages_profile.html">
                                        <div class="media align-center">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img class="rounded-circle avatar-xs" src="{{ asset('admin-theme/common-assets/img/profile-16.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="media-content ml-3">
                                                <h6 class="font-13 mb-0 strong">Admin</h6>
                                                <small>admin@admin.com</small>
                                            </div>
                                            <div class="media-right">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="account-divider">
                                    <!-- logout -->
                                    <a class="account-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <div class="media align-center">
                                            <div class="icon-wrap">
                                                <i class="las la-sign-out-alt font-20"></i>
                                            </div>
                                            <div class="media-content ml-3">
                                                <h6 class="font-13 mb-0 strong ">Logout</h6>
                                            </div>
                                        </div>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <!-- ! logout -->
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
       
        </header>
    </div>
    <!--  Navbar Ends  -->