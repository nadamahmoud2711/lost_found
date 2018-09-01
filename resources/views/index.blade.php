@extends('app')

@section('title') Lost-Found @endsection
@section('content')
	<section class="rev_slider_wrapper">

		<div id="slider1" class="rev_slider">
			<ul>

				<li data-transition="parallaxvertical">
                    <div class="layout-outer">

                        <div class="main-search-input-wrap buttons-searching">
                        <button type="button" class="btn btn-lg mt_15 btn-outline-info bluish" data-toggle="modal" data-target="#modal_found">الإبلاغ عن معثور عليه</button>

                        <button type="button" class="btn btn-lg mt_15 btn-outline-info greyish" data-toggle="modal" data-target="#modal_lost">الإبلاغ عن مفقود</button>
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

	<div class="modal fade" id="modal_found" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog style-one" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="donation-form-outer">
						<form id="found">
							<div class="form-portlet">
								<div class="row clearfix">


									<div class="form-group col-xs-12">
										<div class="field-label"><span class="required">*</span>صور المعثور عليه </div>
										<input type="file" name="images[]" accept="image/*" multiple>
									</div>


									<div class="form-group col-xs-6">

										<br>
										<br>
										<p class="place_info_label">: أو أدخل بيانات الموقع</p>

									</div>

									<div class="form-group col-xs-6">

										<div class="field-label"><span class="required">*</span>موقع العثور عليه</div>
										<button type="button" id="setlocation" class="btn btn-lg btn-outline-info thm-btn" onclick="getLocation()" style="border-radius: 0px; padding: 9px 10px;">ضبط على موقعك الحالي</button>
										<p class="required" id="error_position"></p>

									</div>


									<div class="form-group col-xs-5">

										<div class="field-label">: علامة مميزة</div>
										<input class="form-control" name="place_sign" id="place_sign" placeholder="علامة مميزة بجوار الموقع" type="text">

									</div>
									<div class="form-group col-xs-4">

										<div class="field-label"><span class="required">*</span>المنطقة</div>
										<input class="form-control" name="area" id="area" placeholder="المنطقة" type="text">

									</div>
									<div class="form-group col-xs-3">

										<div class="field-label"><span class="required">*</span>المدينة</div>
										<input class="form-control" name="city" id="city" placeholder="المدينة" type="text">

									</div>

									<div class="form-group col-xs-6">
										<div class="field-label">وقت العثور عليه</div>
										<input class="form-control" type="time">
									</div>


									<div class="form-group col-xs-6">
										<div class="field-label">تاريخ العثور عليه</div>
										<input class="form-control" id="datepicker1" type="text">
									</div>
									<div class="form-group col-xs-12">
										<div class="field-label">: العمر المتوقع</div>

										<div class="col-xs-4"></div>

										<div class="col-xs-3">

											<div class="field-label">: إلى</div>
											<input class="form-control" id="age_to" type="number" name="age_to">
										</div>
										<div class="col-xs-1"></div>


										<div class="col-xs-3">

											<div class="field-label">: من</div>
											<input class="form-control" id="age_from" type="number" name="age_from">
										</div>

									</div>

									<div class="form-group col-xs-12">
										<div class="field-label">: ملحوظات أخرى</div>
										<textarea name="notes" id="notes" cols="30" rows="5" class="form-control" style="height: 100%"></textarea>
									</div>


										<input type="hidden" id="lat" name="lat" value="">
										<input type="hidden" id="lng" name="lng" value="">
										<input type="hidden" id="lost" name="lost" value="0">


								</div>
								<div class="text-center"><button class="thm-btn mt_30 mb_30" type="submit">إبلاغ</button></div>

							</div>


						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal_lost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog style-one" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="donation-form-outer">
						<form id="lost">
							<div class="form-portlet">
								<div class="row clearfix">


									<div class="form-group col-xs-12">
										<div class="field-label"><span class="required">*</span>صور المفقود </div>
										<input type="file" name="images[]" accept="image/*" multiple>
									</div>


									<div class="form-group col-xs-12">

										<div class="field-label"><span class="required">*</span>أدخل بيانات الموقع</div>

									</div>


									<div class="form-group col-xs-5">

										<div class="field-label">: علامة مميزة</div>
										<input class="form-control" name="place_sign" id="lost_place_sign" placeholder="علامة مميزة بجوار الموقع" type="text">

									</div>
									<div class="form-group col-xs-4">

										<div class="field-label"><span class="required">*</span>المنطقة</div>
										<input class="form-control" name="area" id="lost_area" placeholder="المنطقة" type="text">

									</div>
									<div class="form-group col-xs-3">

										<div class="field-label"><span class="required">*</span>المدينة</div>
										<input class="form-control" name="city" id="lost_city" placeholder="المدينة" type="text">

									</div>

									<div class="form-group col-xs-6">
										<div class="field-label">وقت الفقد</div>
										<input class="form-control" type="time">
									</div>


									<div class="form-group col-xs-6">
										<div class="field-label">تاريخ الفقد</div>
										<input class="form-control" id="datepicker2" type="text">
									</div>
									<div class="col-xs-9"></div>

									<div class="form-group col-xs-3">
										<div class="field-label">: العمر</div>

										<input class="form-control" id="age" type="number" name="age">

									</div>

									<div class="form-group col-xs-12">
										<div class="field-label">: ملحوظات أخرى</div>
										<textarea name="notes" id="lost_notes" cols="30" rows="5" class="form-control" style="height: 100%"></textarea>
									</div>


									<input type="hidden" id="lost" name="lost" value="1">


								</div>
								<div class="text-center"><button class="thm-btn mt_30 mb_30" type="submit">إبلاغ</button></div>

							</div>


						</form>
					</div>
				</div>
			</div>
		</div>
	</div>




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
				<a href="#" class="thm-btn inverse my_btn">.. جميع المفقودين</a>
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
                <a href="#" class="thm-btn inverse my_btn">.. جميع المعثور عليهم</a>
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






	@endsection

@section('scripts')

	<script>


        $(document).ready(function() {
            $('input[type="file"]').imageuploadify();

            $.fn.datepicker.dates['en'] = {
                days: ["الأحد", "الإثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة", "السبت"],
                daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                daysMin: ["أحد", "إثنين", "ثلاثاء", "أربعاء", "خميس", "جمعة", "سبت"],
                months: ["يناير", "فبراير", "مارس", "إبريل", "مايو", "يونيو", "يوليو", "أغسطس", "سبتمبر", "أكتوبر", "نوفمبر", "ديسمبر"],
                monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                today: "Today",
                clear: "Clear",
                format: "mm/dd/yyyy",
                titleFormat: "MM yyyy", /* Leverages same syntax as 'format' */
                weekStart: 0
            };

            $('#datepicker1').datepicker({


                language: 'ar'
            });
            $('#datepicker2').datepicker({


                language: 'ar'
            });
        });


	</script>
	<script>
        var lat = document.getElementById("lat");
        var lng = document.getElementById("lng");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                document.getElementById("error_position").innerText = "من فضلك اتصل بالانترنت لحفظ موقعك الحالي";
            }
        }

        function showPosition(position) {
            lat.value = position.coords.latitude;

            lng.value = position.coords.longitude;


           document.getElementById("setlocation").innerText = "تم الضبط على موقعك الحالي";
            document.getElementById("setlocation").style.backgroundColor = '#ef3356';
        }
	</script>



@endsection