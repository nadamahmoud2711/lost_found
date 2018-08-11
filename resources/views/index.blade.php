@extends('app')

@section('title') Lost-Found @endsection
@section('content')
	<section class="rev_slider_wrapper">

		<div id="slider1" class="rev_slider">
			<ul>

				<li data-transition="parallaxvertical">
                    <div class="layout-outer">
<<<<<<< HEAD

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
=======
                        <div class="main-search-input-wrap">
                        <div class="main-search-input fl-wrap">
                            <div class="main-search-input-item">
                                <input type="text" class="custom-input" placeholder="... ابحث عن" value=""/>
                            </div>
                            <!--<div class="main-search-input-item location" id="autocomplete-container">-->
                                <!--<input type="text" placeholder="Location" id="autocomplete-input" value=""/>-->
                                <!--<a href="#"><i class="fa fa-dot-circle-o"></i></a>-->
                            <!--</div>-->
                            <div class="main-search-input-item">
                                <select multiple class="chosen-select" >
                                    <option selected disabled>خيارات البحث</option>
                                    <option>Shops</option>
                                    <option>Hotels</option>
                                    <option>Restaurants</option>
                                    <option>Fitness</option>
                                    <option>Events</option>
                                </select>
                            </div>
                            <button class="main-search-button" onclick="window.location.href='listing.html'">بحث</button>
                        </div>
                    </div>
>>>>>>> 344f6665d3afa735663c6d2aac54b9f448635944
                    </div>

					<img src="img/slides/2.jpg"  alt=""  width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" >



<<<<<<< HEAD

				</li>

=======
					<!--<div class="tp-caption sfl tp-resizeme thm-banner-h1 blue-bg" -->
				        <!--data-x="left" data-hoffset="0" -->
				        <!--data-y="top" data-voffset="249" -->
				        <!--data-whitespace="nowrap"-->
				        <!--data-transform_idle="o:1;" -->
				        <!--data-transform_in="o:0" -->
				        <!--data-transform_out="o:0" -->
				        <!--data-start="500">-->
						<!--To feed and educate!-->
				    <!--</div>-->
					<!--<div class="tp-caption sfr tp-resizeme thm-banner-h1 heavy black-bg" -->
				        <!--data-x="left" data-hoffset="0" -->
				        <!--data-y="top" data-voffset="318" -->
				        <!--data-whitespace="nowrap"-->
				        <!--data-transform_idle="o:1;" -->
				        <!--data-transform_in="o:0" -->
				        <!--data-transform_out="o:0" -->
				        <!--data-start="1000">-->
						<!--We need your support-->
				    <!--</div>-->
					<!--<div class="tp-caption sfb tp-resizeme thm-banner-h3" -->
				        <!--data-x="left" data-hoffset="0" -->
				        <!--data-y="top" data-voffset="386" -->
				        <!--data-whitespace="nowrap"-->
				        <!--data-transform_idle="o:1;" -->
				        <!--data-transform_in="o:0" -->
				        <!--data-transform_out="o:0" -->
				        <!--data-start="1500">-->
						<!--Became a part to change the world-->
				    <!--</div>-->
					<!--<div class="tp-caption sfl tp-resizeme" -->
				        <!--data-x="left" data-hoffset="0" -->
				        <!--data-y="top" data-voffset="450" -->
				        <!--data-whitespace="nowrap"-->
				        <!--data-transform_idle="o:1;" -->
				        <!--data-transform_in="o:0" -->
				        <!--data-transform_out="o:0" -->
				        <!--data-start="2300">-->
						<!--<a href="#" class="thm-btn">Donate Now</a>-->
				    <!--</div>-->
					<!--<div class="tp-caption sfr tp-resizeme" -->
				        <!--data-x="left" data-hoffset="185" -->
				        <!--data-y="top" data-voffset="450" -->
				        <!--data-whitespace="nowrap"-->
				        <!--data-transform_idle="o:1;" -->
				        <!--data-transform_in="o:0" -->
				        <!--data-transform_out="o:0" -->
				        <!--data-start="2600">-->
						<!--<a href="#" class="thm-btn inverse">Learn More</a>-->
				    <!--</div>-->


				</li>
				<!--<li data-transition="parallaxvertical">-->
					<!--<img src="img/slides/1.jpg"  alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >-->
					<!--<div class="tp-caption sfl tp-resizeme thm-banner-h1" -->
				        <!--data-x="left" data-hoffset="0" -->
				        <!--data-y="top" data-voffset="225" -->
				        <!--data-whitespace="nowrap"-->
				        <!--data-transform_idle="o:1;" -->
				        <!--data-transform_in="o:0" -->
				        <!--data-transform_out="o:0" -->
				        <!--data-start="500">-->
						<!--To feed and educate!-->
				    <!--</div>-->
					<!--<div class="tp-caption sfr tp-resizeme thm-banner-h1 heavy" -->
				        <!--data-x="left" data-hoffset="0" -->
				        <!--data-y="top" data-voffset="290" -->
				        <!--data-whitespace="nowrap"-->
				        <!--data-transform_idle="o:1;" -->
				        <!--data-transform_in="o:0" -->
				        <!--data-transform_out="o:0" -->
				        <!--data-start="1000">-->
						<!--We need your support-->
				    <!--</div>-->
					<!--<div class="tp-caption sfb tp-resizeme thm-banner-h3" -->
				        <!--data-x="left" data-hoffset="0" -->
				        <!--data-y="top" data-voffset="368" -->
				        <!--data-whitespace="nowrap"-->
				        <!--data-transform_idle="o:1;" -->
				        <!--data-transform_in="o:0" -->
				        <!--data-transform_out="o:0" -->
				        <!--data-start="1500">-->
						<!--Became a part to change the world-->
				    <!--</div>-->
					<!--<div class="tp-caption sfb tp-resizeme thm-banner-p" -->
				        <!--data-x="left" data-hoffset="0" -->
				        <!--data-y="top" data-voffset="430" -->
				        <!--data-whitespace="nowrap"-->
				        <!--data-transform_idle="o:1;" -->
				        <!--data-transform_in="o:0" -->
				        <!--data-transform_out="o:0" -->
				        <!--data-start="2000">-->
						<!--Our Company has a long tradition of charitable giving and <br> philanthropy. Lorem ipsum dolor sit amet.-->
				    <!--</div>-->
					<!--<div class="tp-caption sfl tp-resizeme" -->
				        <!--data-x="left" data-hoffset="0" -->
				        <!--data-y="top" data-voffset="505" -->
				        <!--data-whitespace="nowrap"-->
				        <!--data-transform_idle="o:1;" -->
				        <!--data-transform_in="o:0" -->
				        <!--data-transform_out="o:0" -->
				        <!--data-start="2300">-->
						<!--<a href="#" class="thm-btn">Donate Now</a>-->
				    <!--</div>-->
					<!--<div class="tp-caption sfr tp-resizeme" -->
				        <!--data-x="left" data-hoffset="185" -->
				        <!--data-y="top" data-voffset="505" -->
				        <!--data-whitespace="nowrap"-->
				        <!--data-transform_idle="o:1;" -->
				        <!--data-transform_in="o:0" -->
				        <!--data-transform_out="o:0" -->
				        <!--data-start="2600">-->
						<!--<a href="#" class="thm-btn inverse">Learn More</a>-->
				    <!--</div>-->
				<!--</li>-->
>>>>>>> 344f6665d3afa735663c6d2aac54b9f448635944
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
<<<<<<< HEAD

=======
			<div class="row single-service-style causes-style2">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-service-home">
						<div class="content">
							<h3><i class="flaticon-gesture-1"></i> Education</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum available but the majority have </p>
							<a href="#" class="thm-btn btn-xs">Donate Now</a>
							<br>
							<a class="btn-details" href="service-details.html">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-service-home">
						<div class="content">
							<h3><i class="flaticon-people-1"></i> Orphans</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum available but the majority have </p>
							<a href="#" class="thm-btn btn-xs">Donate Now</a>
							<br>
							<a class="btn-details" href="service-details.html">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-service-home">
						<div class="content">
							<h3><i class="flaticon-hand"></i> Water</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum available but the majority have </p>
							<a href="#" class="thm-btn btn-xs">Donate Now</a>
							<br>
							<a class="btn-details" href="service-details.html">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-service-home">
						<div class="content">
							<h3><i class="flaticon-people-1"></i> Health</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum available but the majority have </p>
							<a href="#" class="thm-btn btn-xs">Donate Now</a>
							<br>
							<a class="btn-details" href="service-details.html">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-service-home">
						<div class="content">
							<h3><i class="flaticon-hand"></i> Hunger</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum available but the majority have </p>
							<a href="#" class="thm-btn btn-xs">Donate Now</a>
							<br>
							<a class="btn-details" href="service-details.html">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-service-home">
						<div class="content">
							<h3><i class="flaticon-gesture-1"></i> Emergencies</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum available but the majority have </p>
							<a href="#" class="thm-btn btn-xs">Donate Now</a>
							<br>
							<a class="btn-details" href="service-details.html">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-service-home">
						<div class="content">
							<h3><i class="flaticon-hand"></i> Humanity</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum available but the majority have </p>
							<a href="#" class="thm-btn btn-xs">Donate Now</a>
							<br>
							<a class="btn-details" href="service-details.html">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-service-home">
						<div class="content">
							<h3><i class="flaticon-gesture-1"></i> Clothes</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum available but the majority have </p>
							<a href="#" class="thm-btn btn-xs">Donate Now</a>
							<br>
							<a class="btn-details" href="service-details.html">Read More</a>
						</div>
					</div>
				</div>
			</div>
>>>>>>> 344f6665d3afa735663c6d2aac54b9f448635944
		</div>
	</section>

	<section class="overlay-white sec-padding parallax-section sec-padding89">
		<div class="container">
			<div class="row">
<<<<<<< HEAD

=======
				<div class="col-md-8 col-md-offset-2 promote-project style-inner text-center">
					<h3>Save Children From Hunger</h3>
					<div class="sec-title colored text-center">
						<span class="decor">
							<span class="inner"></span>
						</span>
					</div>
					<h2>Became a part of the world lorem ipsum</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat atque, dolore. Amido ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat atque, dolore.Lorem ipsum dolor sit amet, consectetur.</p>
					<a href="#" class="thm-btn">Donate Now</a>
                    <a href="#" class="thm-btn inverse">Read More</a>
				</div>
>>>>>>> 344f6665d3afa735663c6d2aac54b9f448635944
			</div>
		</div>
	</section>

	<section id="steps" class="upcoming-event sec-padding bg-pattern bg-color-thm sec-padding75">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="sec-title text-center">
<<<<<<< HEAD
						<h2 class="text-white">إرشادات الإستخدام</h2>
=======
						<h2 class="text-white">ارشادات الإستخدام</h2>
>>>>>>> 344f6665d3afa735663c6d2aac54b9f448635944
						<p class="text-white">Lorem ipsum is a dummy text it will use for subtitle here</p>
						<span class="decor"><span class="inner"></span></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="container">
<<<<<<< HEAD
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
=======
					<div class="row smpl-step" style="border-bottom: 0; min-width: 500px;">
						<div class="col-xs-3 smpl-step-step disabled">
							<div class="text-center smpl-step-num">Step 1</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a class="smpl-step-icon"><i class="fa fa-user" style="font-size: 60px; padding-left: 12px; padding-top: 3px; color: #25bada;"></i></a>
							<div class="smpl-step-info text-center">Registe User via control panel.</div>
						</div>

						<div class="col-xs-3 smpl-step-step disabled">
							<div class="text-center smpl-step-num">Step 2</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a class="smpl-step-icon"><i class="fa fa-dollar" style="font-size: 60px; padding-left: 18px; padding-top: 5px; color: #25bada;"></i></a>
							<div class="smpl-step-info text-center">Process Payment and fill out all required fields.</div>
						</div>
						<div class="col-xs-3 smpl-step-step disabled">
							<div class="text-center smpl-step-num">Step 3</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a class="smpl-step-icon"><i class="fa fa-repeat" style="font-size: 60px; padding-left: 7px; padding-top: 7px; color: #25bada;"></i></a>
							<div class="smpl-step-info text-center">Confirm Data entered in step 2.</div>
						</div>
						<div class="col-xs-3 smpl-step-step disabled">
							<div class="text-center smpl-step-num">Step 4</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a class="smpl-step-icon"><i class="fa fa-download" style="font-size: 60px; padding-left: 8px; padding-top: 4px; color: #25bada;"></i></a>
							<div class="smpl-step-info text-center">Download product after receiving confirmation email.</div>
						</div>
					</div>
>>>>>>> 344f6665d3afa735663c6d2aac54b9f448635944
				</div>
			</div>
		</div>
	</section>

<<<<<<< HEAD

=======
    <section class="gallery-section full-width pb_2">
    	<div class="auto-container">

			<div class="sec-title text-center">
				<h2>المفقودين</h2>
				<p>Lorem ipsum is a dummy text it will use for subtitle here</p>
				<span class="decor"><span class="inner"></span></span>
			</div>
            
            <!--Filter-->
            <div class="filters">
            	<ul class="filter-tabs style-one clearfix anim-3-all">
                    <li class="filter" data-role="button" data-filter="all">All</li>
                    <li class="filter" data-role="button" data-filter=".child">Child</li>
                    <li class="filter" data-role="button" data-filter=".charity">Charity</li>
                    <li class="filter" data-role="button" data-filter=".sponsorship">Sponsorship</li>
                    <li class="filter" data-role="button" data-filter=".volunteering">Volunteering</li>
                </ul>
            </div>
            
        </div>
        
        <div class="images-container">
            <div class="filter-list clearfix">
                
                <!--Image Box-->
                <div class="image-box mix mix_all charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s1.jpg" class="lightbox-image"><img src="img/gallery/s1.jpg" alt=""></a></figure>
                        <a href="img/gallery/s1.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s2.jpg" class="lightbox-image"><img src="img/gallery/s2.jpg" alt=""></a></figure>
                        <a href="img/gallery/s2.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all child charity">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s3.jpg" class="lightbox-image"><img src="img/gallery/s3.jpg" alt=""></a></figure>
                        <a href="img/gallery/s3.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all child charity sponsorship">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s4.jpg" class="lightbox-image"><img src="img/gallery/s4.jpg" alt=""></a></figure>
                        <a href="img/gallery/s4.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all child sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s5.jpg" class="lightbox-image"><img src="img/gallery/s5.jpg" alt=""></a></figure>
                        <a href="img/gallery/s5.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all child charity">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s6.jpg" class="lightbox-image"><img src="img/gallery/s6.jpg" alt=""></a></figure>
                        <a href="img/gallery/s6.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all child charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s7.jpg" class="lightbox-image"><img src="img/gallery/s7.jpg" alt=""></a></figure>
                        <a href="img/gallery/s7.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image"><a href="img/gallery/s8.jpg" class="lightbox-image"><img src="img/gallery/s8.jpg" alt=""></a></figure>
                        <a href="img/gallery/s8.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
>>>>>>> 344f6665d3afa735663c6d2aac54b9f448635944

	<section id="missing" class="sec-padding meet-Volunteer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="sec-title text-right">
<<<<<<< HEAD
						<h2 style="text-align: center;">المفقودين</h2>

=======
						<h2>المفقودين</h2>
						<p>Lorem ipsum is a dummy text it will use for subtitle here</p>
>>>>>>> 344f6665d3afa735663c6d2aac54b9f448635944
					</div>
				</div>
			</div>
			<div class="clearfix">
				<div class="team-carousel owl-carousel owl-theme">
					<div class="item">
						<div class="single-team-member">
<<<<<<< HEAD

							<div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/2.jpg" alt=""></a>
                            </div>
							<h3 style="text-align: center;">مفقود من : 12/8/2017</h3>
							<span style="text-align: center; font-size: 16px;">محمد أحمد</span>
							<p class="losting">العمر: 7 سنوات</p>

=======
							<div class="img-box">
								<img src="img/team/1.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Muhibbur Rashid</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
>>>>>>> 344f6665d3afa735663c6d2aac54b9f448635944
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
<<<<<<< HEAD
                                <a href="volunteer-profile.html"><img src="img/team/1.jpg" alt=""></a>

                            </div>
							<h3 style="text-align: center;">مفقود من : 22/8/2017</h3>
							<span style="text-align: center; font-size: 16px;">محمد أحمد</span>
							<p class="losting">العمر: 5 سنوات</p>
=======
								<img src="img/team/2.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Rashed Kabir</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
>>>>>>> 344f6665d3afa735663c6d2aac54b9f448635944
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
<<<<<<< HEAD

							<div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/1.jpg" alt=""></a>

                            </div>
							<h3 style="text-align: center;">مفقود من : 22/8/2017</h3>
							<span style="text-align: center; font-size: 16px;">محمد أحمد</span>
							<p class="losting">العمر:12  سنوات</p>
=======
							<div class="img-box">
								<img src="img/team/3.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Jannatul Ferdous</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
>>>>>>> 344f6665d3afa735663c6d2aac54b9f448635944
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
<<<<<<< HEAD

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
=======
							<div class="img-box">
								<img src="img/team/4.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Ashikur Rahman</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="img/team/1.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Muhibbur Rashid</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
>>>>>>> 344f6665d3afa735663c6d2aac54b9f448635944
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
<<<<<<< HEAD

							<div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/2.jpg" alt=""></a>

                            </div>
							<h3 style="text-align: center;">مفقود من : 22/8/2017</h3>
							<span style="text-align: center; font-size: 16px;">محمد أحمد</span>
							<p class="losting">العمر: 5 سنوات</p>
=======
							<div class="img-box">
								<img src="img/team/2.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Rashed Kabir</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
>>>>>>> 344f6665d3afa735663c6d2aac54b9f448635944
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
<<<<<<< HEAD

							<div class="img-box">
                                <a href="volunteer-profile.html"><img src="img/team/2.jpg" alt=""></a>

                            </div>
							<h3 style="text-align: center;">مفقود من : 22/8/2017</h3>
							<span style="text-align: center; font-size: 16px;">محمد أحمد</span>
							<p class="losting">العمر: 5 سنوات</p>
=======
							<div class="img-box">
								<img src="img/team/3.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Jannatul Ferdous</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
>>>>>>> 344f6665d3afa735663c6d2aac54b9f448635944
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
<<<<<<< HEAD

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
=======
							<div class="img-box">
								<img src="img/team/4.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Ashikur Rahman</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
						</div>
					</div>
				</div>
>>>>>>> 344f6665d3afa735663c6d2aac54b9f448635944
			</div>
		</div>
	</section>

<<<<<<< HEAD
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




=======
	<section class="fact-counter-wrapper sec-padding parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 fact-inner">
					<h2>We are served since <b>35 years</b> <br>to helpless people with trust and <br>we are happy</h2>
					<a href="#" class="thm-btn inverse">Be a part of us</a>
				</div>
				<div class="col-lg-6 col-md-12 md-text-center">
					<div class="single-fact">
						<div class="icon-box">
							<i class="flaticon-shapes-2"></i>
						</div>
						<span class="timer" data-from="10" data-to="365" data-speed="5000" data-refresh-interval="50">365</span>
						<p>Total Awards</p>
					</div>
					<div class="single-fact">
						<div class="icon-box">
							<i class="flaticon-people-3"></i>
						</div>
						<span class="timer" data-from="10" data-to="2200" data-speed="5000" data-refresh-interval="50">155</span>
						<p>Total Volunteer</p>
					</div>
					<div class="single-fact">
						<div class="icon-box">
							<i class="flaticon-hands"></i>
						</div>
						<span class="timer" data-from="10" data-to="155" data-speed="5000" data-refresh-interval="50">2200</span>
						<p>Total Projects</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="found" class="sec-padding meet-Volunteer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="sec-title text-right">
						<h2>المعثور عليهم</h2>
						<p>Lorem ipsum is a dummy text it will use for subtitle here</p>
					</div>
				</div>
			</div>
			<div class="clearfix">
				<div class="team-carousel owl-carousel owl-theme">
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="img/team/1.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Muhibbur Rashid</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="img/team/2.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Rashed Kabir</h3>						
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="img/team/3.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Jannatul Ferdous</h3>						
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="img/team/4.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Ashikur Rahman</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="img/team/1.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Muhibbur Rashid</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="img/team/2.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Rashed Kabir</h3>						
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="img/team/3.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Jannatul Ferdous</h3>						
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="img/team/4.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Ashikur Rahman</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="sec-padding testimonials-wrapper parallax-section sec-padding77">
		<div class="container">
			<div class="sec-title colored text-center">
				<h2>Testimonials</h2>
				<span class="decor">
					<span class="inner"></span>
				</span>
			</div>
			<div class="testimonaials-carousel owl-carousel owl-theme">
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
						<p>Lorem ipsum dolor sit amet, per justo iracundia an. Inani tation tritani mea ut. Mundi scriptorem</p>
						<h3>Roberto Carlos</h3>
						<span>Patient of Asthama</span>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="blog-home sec-padding">
		<div class="container">
			<div class="sec-title text-center">
				<h2>Latest News</h2>
				<p>Lorem ipsum is a dummy text it will use for subtitle here</p>
				<span class="decor">
					<span class="inner"></span>
				</span>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12 blogs-inner">
					<div class="single-blog-post">
						<div class="img-box">
							<img class="full-width" src="img/blog/1.jpg" alt="">
							<div class="overlay">
								<div class="box">
									<div class="content">
										<ul>
											<li><a href="blog-details.html"><i class="fa fa-link"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="content-box">
							<div class="date-box">
								<div class="inner">
									<div class="date">
										<b>24</b>
										apr
									</div>
									<div class="comment">
										<i class="flaticon-interface-1"></i> 8
									</div>
								</div>
							</div>
							<div class="content">
								<a href="blog-details.html"><h3>Lates blog post with image</h3></a>
								<p>There are many variations passages available, but the lorem, ipsum... </p>
								<a class="btn-details" href="blog-details.html">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 blogs-inner">
					<div class="single-blog-post">
						<div class="img-box">
							<img class="full-width" src="img/blog/2.jpg" alt="">
							<div class="overlay">
								<div class="box">
									<div class="content">
										<ul>
											<li><a href="blog-details.html"><i class="fa fa-link"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="content-box">
							<div class="date-box">
								<div class="inner">
									<div class="date">
										<b>24</b>
										apr
									</div>
									<div class="comment">
										<i class="flaticon-interface-1"></i> 8
									</div>
								</div>
							</div>
							<div class="content">
								<a href="blog-details.html"><h3>Lates blog post with image</h3></a>
								<p>There are many variations passages available, but the lorem, ipsum... </p>
								<a class="btn-details" href="blog-details.html">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 blogs-inner">
					<div class="single-blog-post">
						<div class="img-box">
							<img class="full-width" src="img/blog/3.jpg" alt="">
							<div class="overlay">
								<div class="box">
									<div class="content">
										<ul>
											<li><a href="blog-details.html"><i class="fa fa-link"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="content-box">
							<div class="date-box">
								<div class="inner">
									<div class="date">
										<b>24</b>
										apr
									</div>
									<div class="comment">
										<i class="flaticon-interface-1"></i> 8
									</div>
								</div>
							</div>
							<div class="content">
								<a href="blog-details.html"><h3>Lates blog post with image</h3></a>
								<p>There are many variations passages available, but the lorem, ipsum... </p>
								<a class="btn-details" href="blog-details.html">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
>>>>>>> 344f6665d3afa735663c6d2aac54b9f448635944


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

