<!-- News Block Two -->
@foreach ($articales as $articale)
<div class="news-block-two style-two">
    <div class="inner-box">
        <div class="image">
            <a href="{{ route('articales.single',$articale->id) }}"><img src="{{ $articale->image_link }}" alt="" /></a>
        </div>
        <div class="lower-content">
            <div class="content">
                <ul class="post-info">
                    <li><span class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines"></span> 02</li>
                    <li><span class="icon flaticon-heart"></span> 126</li>
                </ul>
                <ul class="post-meta">
                    <li>{{ $articale->created_at->format('F j, Y \a\t g:ia') }}</li>
                    <li>Post By: {{ $articale->authore->name }}</li>
                </ul>
                <h3><a href="{{ route('articales.single',$articale->id) }}">{{ $articale->title }}</a></h3>
                <div class="text">{{ $articale->description }}</div>
                <a href="{{ route('articales.single',$articale->id) }}" class="theme-btn btn-style-five"><span class="txt">read more</span></a>
            </div>
        </div>
    </div>
</div>
@endforeach
