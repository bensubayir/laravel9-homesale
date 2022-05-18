<!-- navbar side -->
<nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>
                <!-- user image section-->
                <div class="user-section">
                    <div class="user-section-inner">
                        <img src="{{asset('assets')}}/img/user.jpg" alt="">
                    </div>
                    <div class="user-info">
                        <div>Jonny <strong>Deen</strong></div>
                        <div class="user-text-online">
                            <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                        </div>
                    </div>
                </div>
                <!--end user image section-->
            </li>
            <li class="sidebar-search">
                <!-- search section-->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!--end search section-->
            </li>
            <li class="">
                <a href="index.html"><i class="fa fa-dashboard "></i> Dashboard</a>

            </li>

            <li class="">
                <a href="index.html"><i class="fa fa-home "></i> Sale Advertisement</a>

            </li>
            <li class="">
                <a href="index.html"><i class="fa fa-flask fa-bars"></i> Categories</a>
            </li>
            <li>
                <a href="/admin/product"><i class="fa fa-flask fa-bars"></i> Products</a>
            </li>

            <li>
                <a href="/admin/comment"><i class="fa fa-flask fa-comment-o"></i> Comments</a>
            </li>
            <li>
                <a href="/admin/faq"><i class="fa fa-flask fa-question"></i> FAQ</a>
            </li>
            <li>
                <a href="/admin/messages"><i class="fa fa-flask fa-envelope"> </i> Messages</a>
            </li>
            <li>
                <a href="/admin/users"><i class="fa fa-flask fa-user-md text-purple-400"></i> Users</a>
            </li>
            <li>
                <a href="/admin/social"><i class="fa fa-flask fa-instagram"></i> Social</a>
            </li>
                <!-- second-level-items -->
            </li>
            <li>
                <a href="/admin/setting"><i class="fa fa-sitemap fa-fw"></i>Settings<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                        <!-- third-level-items -->
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>

        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>
<!-- end navbar side -->
