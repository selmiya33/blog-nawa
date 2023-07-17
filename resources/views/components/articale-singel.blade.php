<div class="inner-box">
    <div class="image">
        <img src="{{ $articale->image_link }}" alt="" />
    </div>
    <div class="lower-content">
        <div class="content">
            <ul class="post-info">
                <li><span
                        class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines"></span>
                    02</li>
                <li><span class="icon flaticon-heart"></span> 126</li>
            </ul>
            <ul class="post-meta">
                <li>{{ $articale->created_at->format('F j, Y \a\t g:ia') }}</li>
                <li>Post By: {{ $articale->user->name }}</li>
            </ul>
            <h3>{{ $articale->title }}</h3>
            <div class="text">
                <p>{{ $articale->description }}
                <blockquote>
                    <div class="blockquote-text">{{ $articale->conclusion }}</div>
                    <div class="quote-box"><span class="icon flaticon-quote"></span></div>
                </blockquote>
                <p>{{ $articale->conclusion }}</p>
            </div>
        </div>
    </div>
</div>
