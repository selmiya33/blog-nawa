<div class="sidebar-widget popular-posts">
    <div class="sidebar-title">
        <h2>Recent Posts</h2>
        <div class="separator"></div>
    </div>

    <div class="widget-content">

        @foreach ($articale->department->articales()->latest('created_at')->get() as $item)
            <article class="post">
                <div class="post-thumb"><a href="{{ route('articales.single', $item->id) }}"><img
                            src="{{ $item->image_link }}" alt=""></a></div>
                <h3><a href="{{ route('articales.single', $item->id) }}">{{ $item->title }}</a>
                </h3>
                <span class="date">{{ $item->created_at->format('M. d, Y') }}</span>
            </article>
        @endforeach
    </div>

</div>
