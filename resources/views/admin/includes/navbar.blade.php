<nav role="navigation" class="navbar navbar-default menu-scroll">

    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                                        <span style="color: white">

                                        </span>
                <img src="{{asset('resources')}}/image/New_logo.png" style="height: 100px; margin-top: -40px; padding: 20px">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->



        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="pull-left">
            <ul class="nav navbar-nav">
                <li><a href="{{url('admin/dashboard')}}">لوحة التحكم</a></li>
                <li><a href="{{url('admin/users')}}">المسؤلون</a></li>
                <li><a href="{{url('admin/products')}}">المنتجات</a></li>
                <li><a href="{{url('admin/orders')}}">الطلبات</a></li>
                <li><a href="{{url('admin/partners')}}">شركاء النجاح</a></li>

            </ul>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        mahmoud                    <i class="fa fa-user"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/')}}">عرض الموقع</a></li>
                        <li><a href="#">الملف الشخصي</a></li>
                        <li><a href="#">أعدادت</a></li>
                        <li><a href="#">تسجيل خروج</a></li>
                    </ul>
                </li>
            </ul>
         </div>
        </div>
    </div>

    </nav>
