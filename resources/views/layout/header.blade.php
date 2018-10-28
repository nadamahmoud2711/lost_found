<section class="top-bar">
    <div class="container">

    </div>
</section> <!-- /.top-bar -->
<header class="header">
    <div class="container">
        <div class="logo pull-left">
            <a href="index.html">
                <img src="img/resources/logo.png" alt="Awesome Image"/>
            </a>
        </div>

    </div>
</header> <!-- /.header -->
<nav class="mainmenu-area stricky">
    <div class="container">
        <div class="navigation pull-right">
            <div class="nav-header">
                <ul>
                    <li class="dropdown">
                        <a href="{{ Request::root() }}/#found">ابحث في موقعك الآن</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ Request::root() }}/#found">أبحث عن أهلي</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ Request::root() }}/#found">المعثور عليهم</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ Request::root() }}/#missing">المفقودين</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ Request::root() }}/#steps">إرشادات الإستخدام</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ Request::root() }}/#about">من نحن</a>
                        <!--<ul class="submenu">-->
                        <!--<li><a href="blog-style-one.html">Blog Style One</a></li>-->
                        <!--<li><a href="blog-style-two.html">Blog Style Two</a></li>-->
                        <!--<li><a href="blog-details.html">Blog Details</a></li>-->
                        <!--</ul>-->
                    </li>
                    <li><a href="/">الرئيسية</a></li>
                </ul>
            </div>
            <div class="nav-footer">
                <button><i class="fa fa-bars"></i></button>
            </div>
        </div>
        <div class="pull-left">
            <!--<form action="#">-->
            <!--<input type="text" placeholder="Search...">-->
            <!--<button type="submit"><i class="fa fa-search"></i></button>-->
            <!--</form>-->
            @if (!Auth::check())
                <button type="button" class="btn btn-lg mt_15 btn-info" data-toggle="modal" data-target="#modal-register">إنشاء حساب</button>
                <button type="button" class="btn btn-lg mt_15 btn-outline-info" data-toggle="modal" data-target="#modal-login">تسجيل الدخول</button>
            @else
                <form method="POST" action="{{ route('logout') }}">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-lg mt_15 btn-info">تسجيل الخروج</button>
                </form>
            @endif
        </div>
    </div>
</nav> <!-- /.mainmenu-area -->


<div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog style-one" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="donation-form-outer">
                    <form id="registration_form">
                        {{ csrf_field() }}
                        <div class="form-portlet">
                            <div class="row clearfix">

                                <div class="form-group col-xs-12">
                                    <div class="field-label"><span class="required">*</span>الإسم الكامل </div>
                                    <input id="name" type="text" placeholder="الإسم" name="name" value="{{ old('name') }}" required autofocus>

                                        <span class="help-block">
                                            <strong class="reg_name"></strong>
                                        </span>

                                </div>

                                <div class="form-group col-xs-12">
                                    <div class="field-label"><span class="required">*</span>البريد الإلكتروني </div>
                                    <input id="emailreg" type="email" placeholder="الإيميل" name="email" value="{{ old('email') }}" required>
                                    <span class="help-block">
                                            <strong class="reg_mail"></strong>
                                        </span>
                                </div>

                                <div class="form-group col-xs-12">
                                    <div class="field-label"><span class="required">*</span>كلمة المرور </div>
                                    <input type="password" placeholder="كلمة المرور" name="password" required>
                                    <span class="help-block">
                                            <strong class="reg_pass"></strong>
                                        </span>
                                </div>

                                <div class="form-group  col-xs-12">
                                    <div class="field-label"><span class="required">*</span>تأكيد كلمة المرور </div>
                                    <input id="password-confirm" type="password" placeholder="كلمة المرور" name="password_confirmation" required>
                                    <span class="help-block">
                                            <strong class="reg_repass"></strong>
                                        </span>
                                </div>

                                <div class="form-group col-xs-12">
                                    <div class="field-label">رقم الهاتف </div>
                                    <input type="tel" placeholder="رقم الموبايل أو الهاتف" value="" name="phone">
                                    <span class="help-block">
                                            <strong class="reg_phone"></strong>
                                        </span>
                                </div>
                        <div class="text-center"><button class="thm-btn mt_30 mb_30" type="submit">إنشاء الحساب</button></div>

                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog style-one" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="donation-form-outer">
                    <form class="form-horizontal" id="login_form">
                        {{ csrf_field() }}
                        <div class="form-portlet">
                            <div class="row clearfix">


                                <div class="form-group col-xs-12">
                                    <div class="field-label"><span class="required">*</span>البريد الإلكتروني </div>
                                    <input id="email" type="email" placeholder="الإيميل" value="{{ old('email') }}" name="email" required autofocus>

                                </div>
                                <div class="form-group col-xs-12">
                                    <div class="field-label"><span class="required">*</span>كلمة المرور </div>
                                    <input id="password" type="password" placeholder="كلمة المرور" name="password" required>

                                        <span class="help-block">
                                            <strong class="login_error"></strong>
                                        </span>

                                </div>

                                <div class="text-center"><button class="thm-btn mt_30 mb_30" type="submit">تسجيل الدخول</button></div>

                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
