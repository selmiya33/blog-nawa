<!-- News Block -->
@foreach ($articales as $articale)
    <div class="news-block col-lg-4 col-md-6 col-sm-12" >
        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="image">
                <div class="category">{{ $articale->department->name }}</div>
                <a href="{{ route('articales.single', $articale->id) }}">
                    <img src="{{ $articale->image_link }}" />
                </a>
            </div>
            <div class="lower-content">
                <ul class="post-meta">
                    <li><a href="#">03 Comments</a></li>
                    {{-- <li><a href="#">June 21, 2018 at 8:12pm</a></li> --}}
                    <li><a href="#">{{ $articale->created_at->format('F j, Y \a\t g:ia') }}</a></li>
                    <li><a href="#">12 Liks</a></li>
                </ul>
                <h3><a href="{{ route('articales.single', $articale->id) }}">{{ $articale->title }}</a></h3>
                <div class="text">{{ $articale->description }}</div>
                <a href="{{ route('articales.single', $articale->id) }}" class="read-more">Read More</a>
            </div>
        </div>
    </div>
@endforeach
