<x-blog-layout title="Home" :showbreadcrumb='false'>

    <!-- Main Slider -->
    <section class="main-slider">
        <div class="banner-carousel">
            <!-- Swiper -->
            <div class="swiper-wrapper">
                <x-home.swiper-slide :slides="$slides" />
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- End Main Slider -->

    <!-- Department Section -->
    <section class="department-section">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>Health Department</h2>
                <div class="separator"></div>
            </div>

            <div class="services-carousel owl-carousel owl-theme">
                <!-- Department Block -->
                <x-home.department-block :departments="$departments" />
            </div>

        </div>
    </section>
    <!-- End Department Section -->

    <!-- Fluid Section One -->
    <section class="fluid-section-one">
        <div class="outer-section clearfix">

            <!--Image Column-->
            <div class="image-column" style="background-image: url(images/resource/image-1.jpg)">
                <div class="image">
                    <img src="images/resource/image-1.jpg" alt="">
                </div>
            </div>
            <!--End Image Column-->

            <!--Content Column-->
            <div class="content-column">
                <div class="content-box">
                    <div class="sec-title">
                        <h2>Pioneering in Health.</h2>
                        <div class="separator style-two"></div>
                    </div>
                    <div class="text">
                        <p>Our main long-term goal is always achieving complex results for your dental health. But
                            in the process, we also keep the focus on giving you the best customer service. We're
                            always making our dental office as safe place as possible!</p>
                        <p>Nulla auctor neque non tortor tincidunt fringilla. Nam in condimentum orci. Integer ac
                            pellentesque sem. Nulla fringilla dui id metus viverra interdum.</p>
                    </div>
                    <div class="row clearfix">
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <ul class="list-style-one">
                                <li><span class="icon flaticon-medical-stethoscope-variant"></span>Medical
                                    Treatment</li>
                                <li><span class="icon flaticon-doctor"></span>Qualified Doctors</li>
                            </ul>
                        </div>
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <ul class="list-style-one">
                                <li><span class="icon flaticon-ambulance-side-view"></span>Emergency Help</li>
                                <li><span class="icon flaticon-medical-kit"></span>Medical Professionals</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>Best Health Services</h2>
                <div class="separator"></div>
            </div>

            <div class="row clearfix">

                <!-- Left Column -->
                <div class="left-column pull-left col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Service Block -->
                        <div class="service-block">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon flaticon-doctor-stethoscope"></span>
                                </div>
                                <h3><a href="doctors-detail.html">Outdoor Checkup</a></h3>
                                <div class="text">We provide best service for our cline. <br> Now place take it.
                                </div>
                            </div>
                        </div>

                        <!-- Service Block -->
                        <div class="service-block">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon flaticon-operating-room"></span>
                                </div>
                                <h3><a href="doctors-detail.html">Operation Theater</a></h3>
                                <div class="text">We provide best service for our cline. Now place take it.</div>
                            </div>
                        </div>

                        <!-- Service Block -->
                        <div class="service-block">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon flaticon-van"></span>
                                </div>
                                <h3><a href="doctors-detail.html">Emergency Care</a></h3>
                                <div class="text">We provide best service for our cline. <br> Now place take it.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Circles Column -->
                <div class="circles-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <div class="circles">
                            <div class="circle-one"></div>
                            <div class="circle-two"></div>
                            <div class="circle-three"></div>
                        </div>

                    </div>
                </div>

                <!-- Right Column -->
                <div class="right-column pull-right col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Service Block -->
                        <div class="service-block-two">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon flaticon-water"></span>
                                </div>
                                <h3><a href="doctors-detail.html">Blood Test</a></h3>
                                <div class="text">We provide best service for our cline. <br> Now place take it.
                                </div>
                            </div>
                        </div>

                        <!-- Service Block -->
                        <div class="service-block-two">
                            <div class="inner-box wow fadeInRight" data-wow-delay="250ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon flaticon-pharmacy"></span>
                                </div>
                                <h3><a href="doctors-detail.html">Pharmacy Support</a></h3>
                                <div class="text">We provide best service for our cline. Now place take it.</div>
                            </div>
                        </div>

                        <!-- Service Block -->
                        <div class="service-block-two">
                            <div class="inner-box wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon flaticon-nurse"></span>
                                </div>
                                <h3><a href="doctors-detail.html">24/7 Service</a></h3>
                                <div class="text">We provide best service for our cline. <br> Now place take it.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Counter Section -->
    <section class="counter-section" style="background-image: url(images/background/pattern-3.png)">
        <div class="auto-container">

            <!-- Fact Counter -->
            <div class="fact-counter">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="2350">0</span>
                                </div>
                                <h4 class="counter-title">Satisfied Patients</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="count-outer count-box alternate">
                                    +<span class="count-text" data-speed="3000" data-stop="{{ $authores->count()}}">0</span>
                                </div>
                                <h4 class="counter-title">Doctor’s Team</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="{{ $articales->count()}}">0</span>
                                </div>
                                <h4 class="counter-title">Articale</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="count-outer count-box">
                                    +<span class="count-text" data-speed="2500" data-stop="225">0</span>
                                </div>
                                <h4 class="counter-title">Successfull Surgeries</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Counter Section -->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>The Medical Specialists</h2>
                <div class="separator"></div>
            </div>

            <div class="row clearfix">

                <!-- Team Block -->
                <x-home.team-block :authores="$authores"  :accounts="$accounts"/>

            </div>

        </div>
    </section>
    <!-- End Team Section -->

    <!-- FullWidth Section -->
    <section class="fullwidth-section">
        <div class="outer-container">
            <div class="clearfix">

                <!-- Left Column -->
                <div class="left-column" style="background-image: url(images/background/1.jpg)">
                    <div class="inner-column clearfix">
                        <div class="content">
                            <div class="icon-box">
                                <span class="icon flaticon-contract-1"></span>
                            </div>
                            <div class="title">Need a Doctor for Check-up?</div>
                            <h2>JUST MAKE AN APPOINTMENT</h2>
                            <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Get an
                                    Appointment</span></a>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="right-column">
                    <div class="inner-column">

                        <!-- Upper Box -->
                        <div class="upper-box">
                            <div class="icon flaticon-alarm-clock"></div>
                            <h3>Opening Hours</h3>
                        </div>
                        <ul class="time-list">
                            <li class="clearfix"><span class="left-span pull-left">Monday - Friday</span><span
                                    class="right-span pull-right">08:00am - 10:00pm</span></li>
                            <li class="clearfix"><span class="left-span pull-left">Saturday - Sunday</span><span
                                    class="right-span pull-right">09:00am - 06:00pm</span></li>
                            <li class="clearfix"><span class="left-span pull-left">Emergency Services</span><span
                                    class="right-span pull-right">24 hours Open</span></li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End FullWidth Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>What Patients Saying</h2>
                <div class="separator"></div>
            </div>
            <div class="testimonial-outer" style="background-image: url(images/background/pattern-4.png)">

                <!--Client Testimonial Carousel-->
                <div class="client-testimonial-carousel owl-carousel owl-theme">

                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="quote-icon flaticon-quote"></div>
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I
                                came in for a check up and did not wait more than 5 minutes before I was seen. I can
                                only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="quote-icon flaticon-quote"></div>
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I
                                came in for a check up and did not wait more than 5 minutes before I was seen. I can
                                only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="quote-icon flaticon-quote"></div>
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I
                                came in for a check up and did not wait more than 5 minutes before I was seen. I can
                                only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="quote-icon flaticon-quote"></div>
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I
                                came in for a check up and did not wait more than 5 minutes before I was seen. I can
                                only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="quote-icon flaticon-quote"></div>
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I
                                came in for a check up and did not wait more than 5 minutes before I was seen. I can
                                only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="quote-icon flaticon-quote"></div>
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I
                                came in for a check up and did not wait more than 5 minutes before I was seen. I can
                                only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>

                </div>

                <!--Product Thumbs Carousel-->
                <div class="client-thumb-outer">
                    <div class="client-thumbs-carousel owl-carousel owl-theme">
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/author-1.jpg" alt="">
                            </figure>
                            <div class="author-info">
                                <div class="author-name">Max Winchester</div>
                                <div class="designation">Kidny Patient</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/author-2.jpg" alt="">
                            </figure>
                            <div class="author-info">
                                <div class="author-name">Max Winchester</div>
                                <div class="designation">Kidny Patient</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/author-3.jpg" alt="">
                            </figure>
                            <div class="author-info">
                                <div class="author-name">Max Winchester</div>
                                <div class="designation">Kidny Patient</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/author-1.jpg" alt="">
                            </figure>
                            <div class="author-info">
                                <div class="author-name">Max Winchester</div>
                                <div class="designation">Kidny Patient</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/author-2.jpg" alt="">
                            </figure>
                            <div class="author-info">
                                <div class="author-name">Max Winchester</div>
                                <div class="designation">Kidny Patient</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/author-3.jpg" alt="">
                            </figure>
                            <div class="author-info">
                                <div class="author-name">Max Winchester</div>
                                <div class="designation">Kidny Patient</div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Testimonial Section Two -->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>Latest News & Articals</h2>
                <div class="separator style-three"></div>
            </div>
            <div class="row clearfix">
                <!-- News Block -->
                <x-home.news-block :articales="$articales" />
            </div>
        </div>
    </section>
    <!-- End News Section -->

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Title Column -->
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Subscribe Our Newsletter</h2>
                        <div class="text">To receive email releases, simply provide us with your email address
                            below.</div>
                    </div>
                </div>
                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Subscribe Form -->
                        <div class="subscribe-form">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="email" name="email" value=""
                                        placeholder="Your Email Address" required>
                                    <button type="submit" class="theme-btn btn-style-two"><span
                                            class="txt">subscribe</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Newsletter Section -->
    </div>
</x-blog-layout>
