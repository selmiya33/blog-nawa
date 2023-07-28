<div class="sidebar-widget categories-blog">
    <div class="sidebar-title">
        <h2>Best Categories</h2>
        <div class="separator"></div>
    </div>
    <ul>
        @foreach ($departments  as $department)
        <li><a href="#">{{ $department->name }} <span>{{ $department->articales_count }}</span></a></li>
        @endforeach
    </ul>
</div>
