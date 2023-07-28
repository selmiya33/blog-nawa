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
                        <x-styled-pagination :articales="$articales" />


                    </div>
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
                        <x-department-blog :departments="$departments" />

                        <!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title">
                                <h2>Recent Posts</h2>
                                <div class="separator"></div>
                            </div>

                            <div class="widget-content">

                                @foreach ($articales as $item)
                                    <article class="post">
                                        <div class="post-thumb"><a
                                                href="{{ route('articales.single', $item->id) }}"><img
                                                    src="{{ $item->image_link }}" alt=""></a></div>
                                        <h3><a href="{{ route('articales.single', $item->id) }}">{{ $item->title }}</a>
                                        </h3>
                                        <span class="date">{{ $item->created_at->format('M. d, Y') }}</span>
                                    </article>
                                @endforeach
                            </div>

                        </div>


                        <!-- Gallery Widget -->
                        <x-articale-gallery :gallery="$gallery" />
                    </aside>
                </div>

            </div>
        </div>
    </div>
</x-blog-layout>
