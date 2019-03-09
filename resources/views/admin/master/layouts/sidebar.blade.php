<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="logo-element">
                    <span class="block m-t-xs" style="margin-top:0;">
                        <img src="/images/logo.png" alt="logo" width="210px">
                    </span>
                </div>
                <div class="dropdown profile-element my-profile-element">
                    <a class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">{{ Auth::user()->fullname() }}</strong>
                            </span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInLeft m-t-xs">
                        <li>
                            <a href="#">
                            پروفایل</a>
                        </li>
                        <li>
                            <a href="#">
                            مخاطبین</a>
                        </li>
                        <li>
                            <a href="#">
                            ایمیل</a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="#">
                            خروج</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="active">
                <a href="{{ route('admin-index') }}">
                    <i class="fa fa-th-large"></i>
                    <span class="nav-label">داشبورد ها</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin-index') }}">
                    <i class="fa fa-user"></i>
                    <span class="nav-label">پنل کاربری</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{ route('change-profile-password-view') }}">تغییر رمز عبور</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span class="nav-label">نمونه کارها</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{ route('portfolio.index') }}">لیست نمونه کارها</a>
                    </li>
                    <li>
                        <a href="{{ route('category.index') }}">دسته بندی ها</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span class="nav-label">مدیریت کاربران</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{ route('user.index') }}">همه کاربران</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span class="nav-label">وبلاگ</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{ route('post.index') }}">لیست پست ها</a>
                    </li>
                    <li>
                        <a href="{{ route('pcat.index') }}">دسته بندی ها</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('contact.index') }}">
                    <i class="fa fa-th-large"></i>
                    <span class="nav-label">پیام های دریافتی</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
