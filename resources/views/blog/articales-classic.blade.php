<x-blog-layout title="Home">
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
            <x-styled-pagination :articales="$articales" />



        </div>
    </section>
    <!-- End Portfolio Page Section -->
</x-blog-layout>
