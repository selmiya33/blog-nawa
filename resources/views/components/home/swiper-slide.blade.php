@foreach($slides as $slide)
<div class="swiper-slide slide" style="background-image:url({{ $slide->image_link }})">
    <div class="auto-container">
        <div class="content">
            <div class="title">Welcome our Medical Care Center</div>
            <h2>{{ $slide->title }}</h2>
            <div class="text">{{ $slide->description }}</div>
            <div class="btn-box">
                <a href="#" class="theme-btn btn-style-two"><span class="txt">Our
                        Services</span></a>
                {{-- <a href="contact.html" class="theme-btn phone-btn"><span
                        class="icon flaticon-call"></span>555–123–2323</a> --}}
            </div>
        </div>
    </div>
</div>
@endforeach
