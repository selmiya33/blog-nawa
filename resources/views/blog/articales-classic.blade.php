<x-blog-layout title="Home" >
    <!--Page Title-->
    <x-page-title />
    <!--End Page Title-->

        <!-- Blog Page Section -->
        <section class="blog-page-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- News Block Two -->
                    <x-articale-block-classic :articales="$articales" />
                </div>

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
        </section>
        <!-- End Portfolio Page Section -->
</x-blog-layout>
