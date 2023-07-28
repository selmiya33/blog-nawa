<x-blog-layout title="Home">
    <!--Page Title-->
    <x-page-title />
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="news-detail">

                        <x-articale-singel :articale="$articale" />

                        <!-- Other Options -->
                        <div class="post-share-options clearfix">
                            <div class="pull-right">
                                <p>Tags : </p>
                                <ul class="tags">
                                    <li><a href="#">Body Surgery,</a></li>
                                    <li><a href="#">Dental Care,</a></li>
                                    <li><a href="#">Eye Care</a>,</li>
                                </ul>
                            </div>
                            <div class="pull-left">
                                <p>Shere : </p>
                                <ul class="social-icon">
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- New Posts -->
                        <div class="new-posts">
                            <span class="grid-icon flaticon-menu-3"></span>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <a href="#">Prev Post <span>Tips on Minimalist</span></a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="next-post">Next Post <span>Tips on Minimalist</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Doctor Testimonial Block -->
                        <div class="doctor-testimonial-boxed">
                            <div class="inner-boxed">

                                <div class="single-item-carousel owl-carousel owl-theme">

                                    <div class="doctor-block-two">
                                        <div class="inner-block">
                                            <div class="image">
                                                <img src="images/resource/author-6.jpg" alt="" />
                                            </div>
                                            <h3>MD. Salim Rana</h3>
                                            <ul class="social-icon">
                                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                                <li><a href="#"><span class="fab fa-google-plus-g"></span></a>
                                                </li>
                                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                                <li><a href="#"><span class="fab fa-dribbble"></span></a></li>
                                            </ul>
                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                ut aliquip ex ea commodo consequa aute irure dolor. </div>
                                            <div class="quote-icon flaticon-quote"></div>
                                        </div>
                                    </div>

                                    <div class="doctor-block-two">
                                        <div class="inner-block">
                                            <div class="image">
                                                <img src="images/resource/author-6.jpg" alt="" />
                                            </div>
                                            <h3>MD. Salim Rana</h3>
                                            <ul class="social-icon">
                                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                                <li><a href="#"><span class="fab fa-google-plus-g"></span></a>
                                                </li>
                                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                                <li><a href="#"><span class="fab fa-dribbble"></span></a></li>
                                            </ul>
                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                ut aliquip ex ea commodo consequa aute irure dolor. </div>
                                            <div class="quote-icon flaticon-quote"></div>
                                        </div>
                                    </div>

                                    <div class="doctor-block-two">
                                        <div class="inner-block">
                                            <div class="image">
                                                <img src="images/resource/author-6.jpg" alt="" />
                                            </div>
                                            <h3>MD. Salim Rana</h3>
                                            <ul class="social-icon">
                                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                                <li><a href="#"><span class="fab fa-google-plus-g"></span></a>
                                                </li>
                                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                                <li><a href="#"><span class="fab fa-dribbble"></span></a></li>
                                            </ul>
                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                ut aliquip ex ea commodo consequa aute irure dolor. </div>
                                            <div class="quote-icon flaticon-quote"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <!--Comments Area-->
                    <x-comments-section :comments="$comments" />

                    <!-- Comment Form -->
                    <div class="comment-form">

                        <div class="group-title">
                            <h2>Leave a Comment</h2>
                        </div>

                        <!-- Comment Form -->
                        <div class="comment-form">
                            <!-- Comment Form -->
                            <form method="post" action="{{ route("comment.store") }}">
                                @csrf
                                <input type="hidden" name="articale_id" value="{{ $articale->id }}" hidden>
                                <div class="row clearfix">
                                    <div class="col-lg-9 col-md-9 col-sm-9 form-group">
                                        <input type="text" name="comment" placeholder="Your Comment" required>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                                        <button class="theme-btn comment-btn " type="submit" name="submit-form" style="display: inline; /* Add other inline styles here */">Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!--End Faq Form -->

                    </div>
                    {{-- <!-- Replay Form -->
                    <div class="comment-form">

                        <div class="group-title">
                            <h2>Leave a Replay</h2>
                        </div>

                        <!-- Comment Form -->
                        <div class="comment-form">
                            <!-- Comment Form -->
                            <form method="post" action="#">
                                @csrf
                                <input type="hidden" name="articale_id" value="{{ $articale->id }}" hidden>
                                <div class="row clearfix">
                                    <div class="col-lg-9 col-md-9 col-sm-9 form-group">
                                        <input type="text" name="comment" placeholder="Your Comment" required>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                                        <button class="theme-btn comment-btn " type="submit" name="submit-form" style="display: inline; /* Add other inline styles here */">Reply</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!--End Faq Form -->

                    </div> --}}



                </div>


                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">

                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search..."
                                        required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!--Category Blog-->
                        <x-department-blog :departments="$departments"/>

                        <!-- Popular Posts -->
                        <x-popular-post :articale="$articale"/>

                        <!-- Archive Category -->
                        <div class="sidebar-widget categories-blog">
                            <div class="sidebar-title">
                                <h2>Archives</h2>
                                <div class="separator"></div>
                            </div>
                            <ul>
                                <li><a href="#">February 2019</a></li>
                                <li><a href="#">January 2019</a></li>
                                <li><a href="#">December 2018</a></li>
                            </ul>
                        </div>

                        <!-- Gallery Widget -->
                        <x-articale-gallery :gallery="$gallery" />
                        <!-- Tags -->
                        <div class="sidebar-widget tags">
                            <div class="sidebar-title">
                                <h2>Cool Tags</h2>
                                <div class="separator"></div>
                            </div>
                            <ul class="tag-list clearfix">
                                <li><a href="#">Blood</a></li>
                                <li><a href="#">Eye Care</a></li>
                                <li><a href="#">Care</a></li>
                                <li><a href="#">Body Surgery</a></li>
                                <li><a href="#">Dental</a></li>
                                <li><a href="#">Diabetes</a></li>
                                <li><a href="#">Appointment</a></li>
                            </ul>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>
</x-blog-layout>
