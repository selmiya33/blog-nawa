<x-blog-layout title="Home">


    <!--Page Title-->
    <x-page-title />
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Now Contact With Us</h2>
                <div class="separator"></div>
            </div>

            <!-- Contact Form -->
            @if (session()->has('success'))
                <div id="flash-message" class="alert alert-success ">
                    {{ session('success') }}
                </div>
            @endif
            <div class="contact-form">

                <!--Contact Form-->
                <form method="post" action="{{ route('contact.store') }}" id="contact-form">
                    @csrf
                    <div class="row clearfix">

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="name" placeholder="Name">
                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Email">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="phone" placeholder="Phone">
                        </div>

                        {{-- <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="department" placeholder="Department" >
                        </div> --}}
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <select name="department_id">
                                <option value="">Select Department</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                                <!-- Add more options as needed -->
                            </select>
                        </div>


                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea name="message" placeholder="Your Question"></textarea>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 text-center form-group">
                            <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span
                                    class="txt">Contact Us</span></button>
                        </div>

                    </div>
                </form>

                <!--End Contact Form -->

            </div>
    </section>
    <!-- End Contact Page Section -->

    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <div class="outer-container">
            <div class="auto-container clearfix">
                <div class="map-content">
                    <div class="title">Wanna Touch?</div>
                    <h2>Contact Info</h2>
                    <ul class="info-list">
                        <li><span class="icon fas fa-envelope"></span>website@example.com</li>
                        <li><span class="icon fas fa-phone-volume"></span>(+1) 828-376-0532</li>
                        <li><span class="icon fas fa-map-marker-alt"></span>9332 Bernier Dam, Miami, USA</li>
                        <li><span class="icon far fa-clock"></span>Monday-Saturday 7:00AM - 6:00PM</li>
                    </ul>

                    <ul class="social-icons">
                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                        <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                    </ul>

                </div>
            </div>
            <div class="map-outer">
                <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap"
                    data-hue="#ffc400" data-title="Envato" data-icon-path="images/icons/map-marker.png"
                    data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Section -->

    <!-- Newsletter Section -->
    <section class="newsletter-section style-two">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Title Column -->
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Subscribe Our Newsletter</h2>
                        <div class="text">To receive email releases, simply provide us with your email address below.
                        </div>
                    </div>
                </div>
                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Subscribe Form -->
                        <div class="subscribe-form">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Your Email Address"
                                        required>
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
</x-blog-layout>
