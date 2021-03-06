<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
            <div class="dashboard-sidebar-inner" data-simplebar>
                <div class="dashboard-nav-container">
    
                    <!-- Responsive Navigation Trigger -->
                    <a href="#" class="dashboard-responsive-nav-trigger">
                        <span class="hamburger hamburger--collapse" >
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </span>
                        <span class="trigger-title">Dashboard Navigation</span>
                    </a>
                    
                    <!-- Navigation -->
                    <div class="dashboard-nav">
                        <div class="dashboard-nav-inner">
    
                            <ul data-submenu-title="Start">
                                <li><a href="/dash"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                                <li><a href="dashboard-messages.html"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li>
                                <li><a href="dashboard-bookmarks.html"><i class="icon-material-outline-star-border"></i> Bookmarks</a></li>
                                <li><a href="dashboard-reviews.html"><i class="icon-material-outline-rate-review"></i> Reviews</a></li>
                            </ul>
                            
                            <ul data-submenu-title="Organize and Manage">
                                <li class="active-submenu"><a href="#"><i class="icon-material-outline-business-center"></i> Jobs</a>
                                    <ul>
                                        <li><a href="/jobs">Manage Jobs <span class="nav-tag">3</span></a></li>
                                        <li><a href="dashboard-manage-candidates.html">Manage Candidates</a></li>
                                        <li><a href="/jobs/create">Post a Job</a></li>
                                    </ul>	
                                </li>
                                <li><a href="#"><i class="icon-material-outline-assignment"></i> Tasks</a>
                                    <ul>
                                        <li><a href="dashboard-manage-tasks.html">Manage Tasks <span class="nav-tag">2</span></a></li>
                                        <li><a href="dashboard-manage-bidders.html">Manage Bidders</a></li>
                                        <li><a href="dashboard-my-active-bids.html">My Active Bids <span class="nav-tag">4</span></a></li>
                                        <li><a href="dashboard-post-a-task.html">Post a Task</a></li>
                                    </ul>	
                                </li>
                            </ul>
    
                            <ul data-submenu-title="Account">
                            <li><a href="/users/{{Auth::user()->id}}/edit"><i class="icon-material-outline-settings"></i> Settings</a></li>
                                <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                            </ul>
                            
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </div>
                    <!-- Navigation / End -->
    
                </div>
            </div>
        </div>
        <!-- Dashboard Sidebar / End -->

    