<section class="top-bar">
    <div class="container">
        {{-- {{Auth::logout()}} --}}
        <!--<div class="left-text pull-left">-->
        
    <!--<p><span>Support Us :</span> companyname@mail.com</p>-->
        <!--</div> &lt;!&ndash; /.left-text &ndash;&gt;-->
        <!--<div class="social-icons pull-right">-->
        <!--<ul>-->
        <!--<li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
        <!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
        <!--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
        <!--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
        <!--<li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
        <!--</ul>-->
        <!--</div> &lt;!&ndash; /.social-icons &ndash;&gt;-->
    </div>
</section> <!-- /.top-bar -->
<header class="header">
    <div class="container">
        <div class="logo pull-left">
            <a href="index.html">
                <img src="img/resources/logo.png" alt="Awesome Image"/>
            </a>
        </div>
        {{--<div class="header-right-info pull-right clearfix">--}}
            {{--<div class="single-header-info">--}}
                {{--<div class="icon-box">--}}
                    {{--<div class="inner-box">--}}
                        {{--<i class="flaticon-interface-2"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="content">--}}
                    {{--<h3>EMAIL</h3>--}}
                    {{--<p>companyname@mail.com</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="single-header-info">--}}
                {{--<div class="icon-box">--}}
                    {{--<div class="inner-box">--}}
                        {{--<i class="flaticon-telephone"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="content">--}}
                    {{--<h3>Call Now</h3>--}}
                    {{--<p><b>(732) 803-010-03</b></p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="single-header-info">--}}
                {{--<!-- Modal: donate now Starts -->--}}
                {{--<a class="thm-btn" data-toggle="modal" href="#modal-donate-now">Donate Now</a>--}}
                {{--<!-- Modal: donate now Ends -->--}}
            {{--</div>--}}
        {{--</div>--}}
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
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-portlet">
                            <div class="row clearfix">
                                {{--<div class="form-group col-xs-12 clearfix">--}}
                                    {{--<div class="radio-select">--}}
                                        {{--<input type="radio" id="amount-1" name="sel-amount">--}}
                                        {{--<label for="amount-1">$10</label>--}}
                                    {{--</div>--}}
                                    {{--<div class="radio-select">--}}
                                        {{--<input type="radio" checked="" id="amount-2" name="sel-amount">--}}
                                        {{--<label for="amount-2">$25</label>--}}
                                    {{--</div>--}}
                                    {{--<div class="radio-select">--}}
                                        {{--<input type="radio" id="amount-3" name="sel-amount">--}}
                                        {{--<label for="amount-3">$50</label>--}}
                                    {{--</div>--}}
                                    {{--<div class="radio-select">--}}
                                        {{--<input type="radio" id="amount-4" name="sel-amount">--}}
                                        {{--<label for="amount-4">$100</label>--}}
                                    {{--</div>--}}
                                    {{--<div class="radio-select">--}}
                                        {{--<input type="radio" id="amount-5" name="sel-amount">--}}
                                        {{--<label for="amount-5">$150</label>--}}
                                    {{--</div>--}}
                                    {{--<div class="radio-select">--}}
                                        {{--<input type="radio" id="amount-6" name="sel-amount">--}}
                                        {{--<label for="amount-6">$200</label>--}}
                                    {{--</div>--}}
                                    {{--<div class="radio-select">--}}
                                        {{--OR--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="form-group col-xs-12">
                                    <div class="field-label"><span class="required">*</span>الإسم الكامل </div>
                                    <input id="name" type="text" placeholder="الإسم" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-xs-12">
                                    <div class="field-label"><span class="required">*</span>البريد الإلكتروني </div>
                                    <input id="email" type="email" placeholder="الإيميل" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-xs-12">
                                    <div class="field-label"><span class="required">*</span>كلمة المرور </div>
                                    <input type="password" placeholder="كلمة المرور" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group  col-xs-12">
                                    <div class="field-label"><span class="required">*</span>تأكيد كلمة المرور </div>
                                    <input id="password-confirm" type="password" placeholder="كلمة المرور" name="password_confirmation" required>
                                </div>

                                <div class="form-group col-xs-12">
                                    <div class="field-label">رقم الهاتف </div>
                                    <input type="tel" placeholder="رقم الموبايل أو الهاتف" value="" name="phone">
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        <div class="text-center"><button class="thm-btn mt_30 mb_30" type="submit">إنشاء الحساب</button></div>

                            </div>
                        </div>

                        <!--Form Portlet-->
                        {{--<div class="form-portlet">--}}
                            {{--<h3>Billing Information</h3>--}}
                            {{--<div class="row clearfix">--}}
                                {{--<div class="form-group col-lg-6 col-md-6 col-xs-12">--}}
                                    {{--<div class="field-label">Card Number <span class="required">*</span></div>--}}
                                    {{--<input type="text" required="" placeholder="Card Number" value="" name="name">--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-lg-6 col-md-6 col-xs-12">--}}
                                    {{--<div class="field-label">Security Code (CVC) <span class="required">*</span></div>--}}
                                    {{--<input type="text" required="" placeholder="Security Code" value="" name="name">--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-lg-6 col-md-6 col-xs-12">--}}
                                    {{--<div class="field-label">Name <span class="required">*</span></div>--}}
                                    {{--<input type="text" required="" placeholder="First Name" value="" name="name">--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-lg-6 col-md-6 col-xs-12">--}}
                                    {{--<div class="field-label">Email <span class="required">*</span></div>--}}
                                    {{--<input type="email" required="" placeholder="Email" value="" name="name">--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-lg-6 col-md-6 col-xs-12">--}}
                                    {{--<div class="field-label">Phone <span class="required">*</span></div>--}}
                                    {{--<input type="text" required="" placeholder="Phone" value="" name="name">--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-lg-6 col-md-6 col-xs-12">--}}
                                    {{--<div class="field-label">Address <span class="required">*</span></div>--}}
                                    {{--<input type="text" required="" placeholder="Address 1" value="" name="name">--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-lg-6 col-md-6 col-xs-12">--}}
                                    {{--<div class="field-label">City <span class="required">*</span></div>--}}
                                    {{--<select>--}}
                                        {{--<option>City</option>--}}
                                        {{--<option>City Name</option>--}}
                                        {{--<option>City Other</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-lg-6 col-md-6 col-xs-12">--}}
                                    {{--<div class="field-label">Zip / Postal Code <span class="required">*</span></div>--}}
                                    {{--<input type="text" required="" placeholder="Zip Code" value="" name="name">--}}
                                {{--</div>--}}
                                {{--<hr>--}}
                                {{--<div class="text-center"><button class="thm-btn mt_30 mb_30" type="submit">Donate Now</button></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <!--Form Portlet-->

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
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-portlet">
                            <div class="row clearfix">


                                <div class="form-group col-xs-12">
                                    <div class="field-label"><span class="required">*</span>البريد الإلكتروني </div>
                                    <input id="email" type="email" placeholder="الإيميل" value="{{ old('email') }}" name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-xs-12">
                                    <div class="field-label"><span class="required">*</span>كلمة المرور </div>
                                    <input id="password" type="password" placeholder="كلمة المرور" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
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
