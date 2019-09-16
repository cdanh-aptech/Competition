<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Header</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Admin Area - Competion</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
            @php
                if(Auth::check())
                {
                    $user_login = Auth::user();
                }
            @endphp
            @if(isset($user_login))
                <li><i class="fa fa-user fa-fw"></i>{{$user_login->Ten}}
                </li>
                <li><a href="admin/user/sua/{{$user_login->id}}"><i class="fa fa-gear fa-fw"></i>Cài đặt</a>
                </li>
                <li class="divider"></li>
                <li><a href="admin/logout"><i class="fa fa-sign-out fa-fw"></i>Đăng xuất</a>
                </li>
            @endif
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    {{-- Menu left --}}
    @include('admin.layout.menu')
    <!-- /.navbar-static-side -->
    {{-- End Menu left --}}
</nav>