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
					<div class="news-classic">
						<!-- News Block Two -->
                        <x-articale-block-simple :articales="$articales" />

						<!-- Styled Pagination -->
						<div class="styled-pagination text-center">
							<ul class="inner-container clearfix">
								<li class="prev"><a href="#" class="active"><i class="flaticon-left-arrow"></i> Prev</a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li class="active"><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li class="next"><a href="#" class="active">Next <i class="flaticon-right-arrow-1"></i></a></li>
							</ul>
						</div>

					</div>
				</div>

				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar">

						<!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>

						<!--Category Blog-->
                        <div class="sidebar-widget categories-blog">
                        	<div class="sidebar-title">
                            	<h2>Best Categories</h2>
								<div class="separator"></div>
                            </div>
                            <ul>
								<li><a href="#">Body Surgery <span>05</span></a></li>
								<li><a href="#">Dental Care <span>12</span></a></li>
								<li><a href="#">Eye Care <span>35</span></a></li>
								<li><a href="#">Blood Cancer <span>25</span></a></li>
								<li><a href="#">Neurology Sargery <span>65</span></a></li>
								<li><a href="#">Health Care <span>12</span></a></li>
							</ul>
                        </div>

						<!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                        	<div class="sidebar-title">
                            	<h2>Recent Posts</h2>
								<div class="separator"></div>
                            </div>

							<div class="widget-content">

                                <article class="post">
                                    <div class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                                    <h3><a href="blog-detail.html">Integrative Medicine And Cancer Treatment</a></h3>
                                    <span class="date">Dec. 20,  2017</span>
                                </article>

								<article class="post">
                                    <div class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-4.jpg" alt=""></a></div>
                                    <h3><a href="blog-detail.html">Achieving Better Health Care One Patient  Time</a></h3>
                                    <span class="date">Dec. 20,  2017</span>
                                </article>

								<article class="post">
                                    <div class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-5.jpg" alt=""></a></div>
                                    <h3><a href="blog-detail.html">Doctor Appointment for the Client to check up.</a></h3>
                                    <span class="date">Dec. 20,  2017</span>
                                </article>

							</div>

						</div>

						<!-- Gallery Widget -->
                        <x-articale-gallery :gallery="$gallery"/>
					</aside>
				</div>

			</div>
		</div>
	</div>
</x-blog-layout>
