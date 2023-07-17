<div class="sidebar-widget gallery-widget">
    <div class="sidebar-title">
        <h2>Gallery</h2>
        <div class="separator"></div>
    </div>
    <div class="gallery-outer clearfix">
        @foreach ($gallery as $image)
        <figure class="image">
            <a href="{{ $image->image_link }}" class="lightbox-image" title="Image Title Here"><img src="{{ $image->image_link }}" alt=""></a>
        </figure>
        @endforeach
    </div>
</div>
