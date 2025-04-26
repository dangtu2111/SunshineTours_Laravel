<nav class="navbar-default navbar-static-side" style="position: fixed;" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{ asset('backend/img/profile_small.jpg')}}" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <!-- <li class="{{ request()->routeIs('admin.home') ? 'active' : '' }}">
                        <a href="{{route('admin.home')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                    </li> -->
                    
                    <li class="{{ request()->routeIs('admin.tour') ? 'active' : '' }}">
                        <a href="{{route('admin.tour')}}"><i class="fa fa-edit"></i> <span class="nav-label">Tour </span></a>
                        
                    </li>
                    <li class="{{ request()->routeIs('admin.user') ? 'active' : '' }}">
            
                        <a href="{{route('admin.user')}}"><i class="fa fa-globe"></i> <span class="nav-label">User </span><span class="label label-info pull-right">NEW</span></a>
                        
                    </li>
                    <li class="{{ request()->routeIs('admin.booking') ? 'active' : '' }}">
                        <a href="{{route('admin.booking')}}"><i class="fa fa-table"></i> <span class="nav-label">Booking</span></a>
                        
                    </li>
                    
                    <li class="{{ request()->routeIs('admin.payment') ? 'active' : '' }}">
                        <a href="{{route('admin.payment')}}"><i class="fa fa-sitemap"></i> <span class="nav-label">Payment  </span></a>
                       
                    </li>
                    
                    <!-- <li class="{{ request()->routeIs('admin.content') ? 'active' : '' }}">

                        <a href="{{route('admin.content')}}"><i class="fa fa-desktop"></i> <span class="nav-label">Content </span>  <span class="pull-right label label-primary">SPECIAL</span></a>
                        
                    </li> -->
                    <!-- <li> -->
                    <!-- <li class="{{ request()->routeIs('admin.report') ? 'active' : '' }}">

                        <a href="{{route('admin.report')}}"><i class="fa fa-picture-o"></i> <span class="nav-label">Report</span></a>
                        
                    </li>
                    <li>
                    <li class="{{ request()->routeIs('admin.feedback') ? 'active' : '' }}">

                        <a href="{{route('admin.feedback')}}"><i class="fa fa-envelope"></i> <span class="nav-label">Feedback  </span><span class="label label-warning pull-right">16/24</span></a>
                        
                    </li> -->
                    
                </ul>

            </div>
        </nav>