<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="{{ url('css/admin_assets/images/backgrounds/02.jpg') }}">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="{{ url('css/admin_assets/images/logo/logo.png') }}"/>
                    <h3 class="brand-text">Couple Tuple</h3></a></li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="navigation-background"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{ url('admin/dashboard') }}"><i class="fa-solid fa-house"></i>
                    <span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>
            <li class="nav-item"><a href="#"><i class="fa-solid fa-address-card"></i><span class="menu-title" data-i18n="">Register CMS &nbsp;&nbsp;&nbsp; <i class="fa fa-caret-down"></i></span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ url('admin/profile-for') }}">Add Profile For Title</a>
                    </li>
                    <li><a class="menu-item" href="{{ url('admin/religion') }}">Add Title For Religion</a>
                    </li>
                    <li><a class="menu-item" href="{{ url('admin/community') }}">Add Title For Community</a>
                    </li>
                    <li><a class="menu-item" href="{{ url('admin/livingin') }}">Add Title For Living IN</a>
                    </li>
                    <li><a class="menu-item" href="{{ url('admin/status') }}">Add Title For Marital Status</a>
                    </li>
                    <li><a class="menu-item" href="{{ url('admin/height') }}">Add Title For Height</a>
                    </li>
                    <li><a class="menu-item" href="{{ url('admin/sub-community') }}">Add Title For Sub Community</a>
                    </li>
                    <li><a class="menu-item" href="{{ url('admin/diet') }}">Add Title For Diet</a>
                    </li>
                    <li><a class="menu-item" href="{{ url('admin/education') }}">Add Title For Education</a>
                    </li>
                    <li><a class="menu-item" href="{{ url('admin/work') }}">Add Title For Work</a>
                    </li>
                    <li><a class="menu-item" href="{{ url('admin/profession') }}">Add Title For Profession</a>
                    </li>
                    <li><a class="menu-item" href="{{ url('admin/salary') }}">Add Title For Salary</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="{{ url('admin/user-list') }}"><i class="fa-solid fa-user"></i>
                    <span class="menu-title" data-i18n="">Users List</span></a>
            </li>
            <li class=" nav-item"><a href="{{ url('admin/package') }}"><i class="fa-solid fa fa-lightbulb-o"></i>
                    <span class="menu-title" data-i18n="">Add Plan</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
