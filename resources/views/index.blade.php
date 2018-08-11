@extends('app')

@section('title') Lost-Found @endsection
@section('content')
	<section class="rev_slider_wrapper">

		<div id="slider1" class="rev_slider">
			<ul>

				<li data-transition="parallaxvertical">
                    <div class="layout-outer">

                        <div class="main-search-input-wrap buttons-searching">
                        <button type="button" class="btn btn-lg mt_15 btn-outline-info bluish" data-toggle="modal" data-target="#modal-login">الإبلاغ عن معثور عليه</button>

                        <button type="button" class="btn btn-lg mt_15 btn-outline-info greyish" data-toggle="modal" data-target="#modal-login">الإبلاغ عن مفقود</button>
                        </div>

                        {{--<div class="main-search-input-wrap">--}}
                        {{--<div class="main-search-input fl-wrap">--}}
                            {{--<div class="main-search-input-item">--}}
                                {{--<input type="text" class="custom-input" placeholder="... ابحث عن" value=""/>--}}
                            {{--</div>--}}
                            {{--<!--<div class="main-search-input-item location" id="autocomplete-container">-->--}}
                                {{--<!--<input type="text" placeholder="Location" id="autocomplete-input" value=""/>-->--}}
                                {{--<!--<a href="#"><i class="fa fa-dot-circle-o"></i></a>-->--}}
                            {{--<!--</div>-->--}}
                            {{--<div class="main-search-input-item">--}}
                                {{--<select multiple class="chosen-select" >--}}
                                    {{--<option selected disabled>خيارات البحث</option>--}}
                                    {{--<option>Shops</option>--}}
                                    {{--<option>Hotels</option>--}}
                                    {{--<option>Restaurants</option>--}}
                                    {{--<option>Fitness</option>--}}
                                    {{--<option>Events</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                            {{--<button class="main-search-button" onclick="window.location.href='listing.html'">بحث</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    </div>

					<img src="img/slides/2.jpg"  alt=""  width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" >
				</li>
			</ul>
		</div>
	</section>


	<section id="about" class="home-serivce sec-padding sec-padding74">
		<div class="container">
			<div class="sec-title text-center">
				<h2>من نحن</h2>
				<p>Lorem ipsum is a dummy text it will use for subtitle here</p>
				<span class="decor"><span class="inner"></span></span>
			</div>
		</div>
	</section>

	<section class="overlay-white sec-padding parallax-section sec-padding89">
		<div class="container">
			<div class="row">
			</div>
		</div>
	</section>

	<section id="steps" class="upcoming-event sec-padding bg-pattern bg-color-thm sec-padding75">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="sec-title text-center">
						<h2 class="text-white">إرشادات الإستخدام</h2>
						<p class="text-white">Lorem ipsum is a dummy text it will use for subtitle here</p>
						<span class="decor"><span class="inner"></span></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="container">
					{{--<div class="row smpl-step" style="border-bottom: 0; min-width: 500px;">--}}
						{{--<div class="col-xs-3 smpl-step-step disabled">--}}
							{{--<div class="text-center smpl-step-num">Step 1</div>--}}
							{{--<div class="progress">--}}
								{{--<div class="progress-bar"></div>--}}
							{{--</div>--}}
							{{--<a class="smpl-step-icon"><i class="fa fa-user" style="font-size: 60px; padding-left: 12px; padding-top: 3px; color: #25bada;"></i></a>--}}
							{{--<div class="smpl-step-info text-center">Registe User via control panel.</div>--}}
						{{--</div>--}}

						{{--<div class="col-xs-3 smpl-step-step disabled">--}}
							{{--<div class="text-center smpl-step-num">Step 2</div>--}}
							{{--<div class="progress">--}}
								{{--<div class="progress-bar"></div>--}}
							{{--</div>--}}
							{{--<a class="smpl-step-icon"><i class="fa fa-dollar" style="font-size: 60px; padding-left: 18px; padding-top: 5px; color: #25bada;"></i></a>--}}
							{{--<div class="smpl-step-info text-center">Process Payment and fill out all required fields.</div>--}}
						{{--</div>--}}
						{{--<div class="col-xs-3 smpl-step-step disabled">--}}
							{{--<div class="text-center smpl-step-num">Step 3</div>--}}
							{{--<div class="progress">--}}
								{{--<div class="progress-bar"></div>--}}
							{{--</div>--}}
							{{--<a class="smpl-step-icon"><i class="fa fa-repeat" style="font-size: 60px; padding-left: 7px; padding-top: 7px; color: #25bada;"></i></a>--}}
							{{--<div class="smpl-step-info text-center">Confirm Data entered in step 2.</div>--}}
						{{--</div>--}}
						{{--<div class="col-xs-3 smpl-step-step disabled">--}}
							{{--<div class="text-center smpl-step-num">Step 4</div>--}}
							{{--<div class="progress">--}}
								{{--<div class="progress-bar"></div>--}}
							{{--</div>--}}
							{{--<a class="smpl-step-icon"><i class="fa fa-download" style="font-size: 60px; padding-left: 8px; padding-top: 4px; color: #25bada;"></i></a>--}}
							{{--<div class="smpl-step-info text-center">Download product after receiving confirmation email.</div>--}}
						{{--</div>--}}
					{{--</div>--}}
				</div>
			</div>
		</div>
	</section>

	<section id="missing" class="sec-padding meet-Volunteer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="sec-title text-right">
						<h2 style="text-align: center;">المفقودين</h2>
					</div>
				</div>
			</div>
			<div class="clearfix">
				<div class="team-carousel owl-carousel owl-theme">
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/2.jpg" alt=""></a>
                            </div>
							<h3 style="text-align: center;">مفقود من : 12/8/2017</h3>
							<span style="text-align: center; font-size: 16px;">محمد أحمد</span>
							<p class="losting">العمر: 7 سنوات</p>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/1.jpg" alt=""></a>
                            </div>
							<h3 style="text-align: center;">مفقود من : 22/8/2017</h3>
							<span style="text-align: center; font-size: 16px;">محمد أحمد</span>
							<p class="losting">العمر: 5 سنوات</p>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">

							<div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/1.jpg" alt=""></a>

                            </div>
							<h3 style="text-align: center;">مفقود من : 22/8/2017</h3>
							<span style="text-align: center; font-size: 16px;">محمد أحمد</span>
							<p class="losting">العمر:12  سنوات</p></div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/2.jpg" alt=""></a>
                            </div>
							<h3 style="text-align: center;">مفقود من : 22/8/2017</h3>
							<span style="text-align: center; font-size: 16px;">محمد أحمد</span>
							<p class="losting">العمر: 5 سنوات</p>
						</div>
					</div>

					<div class="item">

						<div class="single-team-member">

							<div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/2.jpg" alt=""></a>
							</div>
							<h3 style="text-align: center;">مفقود من : 22/11/2017</h3>
							<span style="text-align: center; font-size: 16px;">محمد أحمد</span>
							<p class="losting">العمر: 5 سنوات</p>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/2.jpg" alt=""></a>

                            </div>
							<h3 style="text-align: center;">مفقود من : 22/8/2017</h3>
							<span style="text-align: center; font-size: 16px;">محمد أحمد</span>
							<p class="losting">العمر: 5 سنوات</p>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/2.jpg" alt=""></a>

                            </div>
							<h3 style="text-align: center;">مفقود من : 22/8/2017</h3>
							<span style="text-align: center; font-size: 16px;">محمد أحمد</span>
							<p class="losting">العمر: 5 سنوات</p>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">

							<div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/2.jpg" alt=""></a>

                            </div>
							<h3 style="text-align: center;">مفقود من : 22/8/2017</h3>
							<span style="text-align: center; font-size: 16px;">محمد أحمد</span>
							<p class="losting">العمر: 5 سنوات</p>
						</div>
					</div>
				</div>
				<a href="#" class="thm-btn inverse">.. جميع المفقودين</a>
			</div>
		</div>
	</section>

    <section class="overlay-white sec-padding parallax-section sec-padding89">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>


    <section id="found" class="sec-padding meet-Volunteer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="sec-title text-right">
                        <h2 style="text-align: center;">المعثور عليهم</h2>

                    </div>
                </div>
            </div>
            <div class="clearfix">
                <div class="team-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="single-team-member">

                            <div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/2.jpg" alt=""></a>
                            </div>
                            <h3 style="text-align: center;">عثر عليه: 12/8/2017</h3>
                            <span style="text-align: center; font-size: 16px;">يطلق عليه: محمد أحمد</span>
                            <p class="losting">العمر المتوقع: 7-9 سنوات</p>

                        </div>
                    </div>
                    <div class="item">
                        <div class="single-team-member">
                            <div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/1.jpg" alt=""></a>

                            </div>
                            <h3 style="text-align: center;">عثر عليه: 12/8/2017</h3>
                            <span style="text-align: center; font-size: 16px;">يطلق عليه: مجهول الاسم</span>
                            <p class="losting">العمر المتوقع: 7-9 سنوات</p>

                        </div>
                    </div>
                    <div class="item">
                        <div class="single-team-member">

                            <div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/1.jpg" alt=""></a>

                            </div>
                            <h3 style="text-align: center;">عثر عليه: 12/8/2017</h3>
                            <span style="text-align: center; font-size: 16px;">يطلق عليه: محمد</span>
                            <p class="losting">العمر المتوقع: 7-9 سنوات</p>

                        </div>
                    </div>
                    <div class="item">
                        <div class="single-team-member">

                            <div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/2.jpg" alt=""></a>
                            </div>
                            <h3 style="text-align: center;">عثر عليه: 12/8/2017</h3>
                            <span style="text-align: center; font-size: 16px;">يطلق عليه: سلامة</span>
                            <p class="losting">العمر المتوقع: 7-9 سنوات</p>

                        </div>
                    </div>

                    <div class="item">

                        <div class="single-team-member">

                            <div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/2.jpg" alt=""></a>
                            </div>
                            <h3 style="text-align: center;">عثر عليه: 12/8/2017</h3>
                            <span style="text-align: center; font-size: 16px;">يطلق عليه: محمد</span>
                            <p class="losting">العمر المتوقع: 7-9 سنوات</p>

                        </div>
                    </div>
                    <div class="item">
                        <div class="single-team-member">

                            <div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/2.jpg" alt=""></a>

                            </div>
                            <h3 style="text-align: center;">عثر عليه: 12/8/2017</h3>
                            <span style="text-align: center; font-size: 16px;">يطلق عليه: محمد</span>
                            <p class="losting">العمر المتوقع: 7-9 سنوات</p>

                        </div>
                    </div>
                    <div class="item">
                        <div class="single-team-member">

                            <div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/2.jpg" alt=""></a>

                            </div>
                            <h3 style="text-align: center;">عثر عليه: 12/8/2017</h3>
                            <span style="text-align: center; font-size: 16px;">يطلق عليه: محمد</span>
                            <p class="losting">العمر المتوقع: 7-9 سنوات</p>

                        </div>
                    </div>
                    <div class="item">
                        <div class="single-team-member">

                            <div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/2.jpg" alt=""></a>

                            </div>
                            <h3 style="text-align: center;">عثر عليه: 12/8/2017</h3>
                            <span style="text-align: center; font-size: 16px;">يطلق عليه: محمد</span>
                            <p class="losting">العمر المتوقع: 7-9 سنوات</p>

                        </div>
                    </div>
                </div>
                <a href="#" class="thm-btn inverse">.. جميع المعثور عليهم</a>
            </div>
        </div>
    </section>

	<section class="bg-color-thm p_35">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="clients-carousel owl-carousel owl-theme">
						<div class="item">
							<div class="img-box">
								<img src="img/clients/logo-1.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="img/clients/logo-2.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="img/clients/logo-3.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="img/clients/logo-4.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="img/clients/logo-5.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="img/clients/logo-1.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="img/clients/logo-2.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="img/clients/logo-3.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<div id="regster-form" class="modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Modal body text goes here.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Save changes</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	@endsection

