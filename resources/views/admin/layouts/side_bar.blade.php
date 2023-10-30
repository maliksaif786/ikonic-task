 <!--  Sidebar Starts  -->
 <div class="sidebar-wrapper sidebar-theme">
            <nav id="sidebar">
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="{{url('admin/dashboard')}}" data-active="true"  class="dropdown-toggle">
                            <div class="">
                                <i class="las la-home"></i>
                                <span>Dashboards</span>
                            </div>
                        </a> 
                    </li>
                 
                   
                    <li class="menu-title">Pages</li>
                     <li class="menu">
                        <a href="{{url('users')}}"  class="dropdown-toggle">
                            <div class="">
                                <i class="la la-users"></i>
                                <span>Users</span>
                            </div>
                           
                        </a>
                       
                    </li>
                   
                    <!-- category start -->
                    <li class="menu">
                        <a href="{{route('categories.index')}}"  class="dropdown-toggle">
                            <div class="">
                                <i class="la la-cubes"></i>
                                <span>Categories</span>
                            </div>
                        </a>
                    </li>
                    <!-- end category -->

                    <!-- complaint start --> 
                     <li class="menu">
                        <a href="{{url('feedbacks')}}"  class="dropdown-toggle">
                            <div class="">
                                <i class="la la-dollar"></i>
                                <span>Feedback</span>
                            </div>
                        </a>
                    </li> 
                    <!-- end complaint -->

                    <?php 
                    use App\Models\Conversation;
                    $count = Conversation::count();
                    ?>
         
                    <!-- Conversation Start -->
                    <li class="menu">
                        <a href="{{url('chats')}}"  class="dropdown-toggle">
                            <div class="">
                                <i class="la la-dollar"></i>
                                <span>Conversations</span>
                            </div>
                            <div>
                                <span class="menu-badge badge-danger">{{$count}}</span>
                            </div>
                        </a>
                    </li>
                    <!-- End Conversation -->
                </ul>
            </nav>
        </div>
        <!--  Sidebar Ends  -->