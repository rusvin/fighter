<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle"
                                 src="{{(auth()->user()->avatar) ? asset(config('images.users.small.public_path') . auth()->user()->avatar):asset(config('images.default_avatar')) }}" />
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{auth()->user()->name}} {{auth()->user()->last_name}}</strong>
                             </span> </span> </a>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="active">
                <a href="layouts.html"><i class="fa fa-user"></i> <span class="nav-label">ПРОФІЛЬ</span></a>
            </li>
            @if(Gate::allows('admin'))
            <li>
                <a href="layouts.html"><i class="fa fa-plus"></i> <span class="nav-label">Додати гру
                        <span class="pull-right text-danger"><b>A</b></span></span></a>
            </li>
            @endif
            <li>
                <a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">КАТАЛОГ ІГОР</span></a>
            </li>
            <li>
                <a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">РЕЙТИНГ</span></a>
            </li>
            <li>
                <a href="layouts.html"><i class="fa fa-envelope"></i> <span class="nav-label">ПОВІДОМЛЕННЯ</span></a>
            </li>
            <li>
                <a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">СТАТИСТИКА</span></a>
            </li>
            <li>
                <a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">МОЇ ПУБЛІКАЦІЇ</span></a>
            </li>

        </ul>

    </div>
</nav>