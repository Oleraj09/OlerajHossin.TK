<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href={{route('dashboard')}}>Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href={{route('dashboard')}}> <i class="fa-solid fa-user fa-xl"></i></a>
        </div>

        <ul class="sidebar-menu">
            <li class="active"><a class="nav-link" href={{route('dashboard')}}><i class="fa-solid fa-house"></i> <span style="margin-left: 7px; margin-top:-3px">Dashboard</span></a></li>
            <li class="nav-item dropdown active">
                <a href="" class="nav-link has-dropdown"><i class="fa-solid fa-users"></i><span style="margin-left: 7px; margin-top:-3px">Site Management</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href={{route('post')}}><i class="fas fa-angle-right"></i><span style="margin-left: 7px;"> Post Managemnet</span></a></li>
                    <li class=""><a class="nav-link" href={{route('portfolio')}}><i class="fas fa-angle-right"></i><span style="margin-left: 7px;"> Portfolio Management</span></a></li>
                </ul>
            </li>
            <li class="active"><a class="nav-link" href={{route('setting')}}><i class="fa-solid fa-gear"></i> <span style="margin-left: 7px; margin-top:-3px">Setting</span></a></li>
        </ul>
    </aside>
</div>