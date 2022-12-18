<nav class="navbar navbar-default sidebar">
    <div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="sidebar">
            <ul class="nav navbar-nav">
                @hasanyrole('owner|admin|author')
                    <li class="{{Request::is('admin/dashboard*') ? "active":""}}">
                        <a href="{{route('admin-dashboard')}}">
                            <i class="fa fa-dashboard"></i>
                            <span class="hidden-sm">Dashboard</span>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/article*') ? "active":""}}">
                        <a href="{{route('backend.article.index')}}">
                            <i class="fa fa-file-text"></i>
                            <span class="hidden-sm">Articles</span>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/comment*') ? "active":""}}">
                        <a href="{{route('backend.comment.index')}}">
                            <span class="fa fa-comment-o"></span>
                            <span class="hidden-sm">Comments</span>
                            <span class="badge bg-danger" style="display: none;" id="new-comment">New</span>
                        </a>
                    </li>
                @endrole
                @hasanyrole('owner|admin')
                    <li class="{{Request::is('admin/category*') ? "active":""}}">
                        <a href="{{route('backend.category.index')}}">
                            <span class="fa fa-share-alt"></span>
                            <span class="hidden-sm">Categories</span>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/keyword*') ? "active":""}}">
                        <a href="{{route('backend.keyword.index')}}">
                            <span class="fa fa-file"></span>
                            <span class="hidden-sm">Keywords</span>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/user*') ? "active":""}}">
                        <a href="{{route('backend.user.index')}}">
                            <span class="fa fa-user"></span>
                            <span class="hidden-sm">Users</span>
                        </a>
                    </li>
                        <li class="{{Request::is('admin/feedback*') ? "active":""}}">
                            <a href="{{route('backend.feedback.index')}}">
                                <span class="fa fa-hand-peace-o"></span>
                                <span class="hidden-sm">User Feedback</span>
                            </a>
                        </li>
                @endhasanyrole
                @role('owner')
                    <li class="{{Request::is('admin/config*') ? "active":""}}">
                        <a href="{{route('backend.config.index')}}">
                            <span class="fa fa-gear"></span>
                            <span class="hidden-sm">Configurations</span>
                        </a>
                    </li>
                @endrole
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
