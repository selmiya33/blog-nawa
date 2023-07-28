<!-- Department Block -->
@foreach($departments as $department)
<div class="department-block">
    <div class="inner-box">
        <div class="upper-box" >
            <div class="icon flaticon-kidneys"></div>
            {{-- <div class="image-small"> <img src="{{ $department->image_link }}" alt="" srcset=""></div> --}}
            <h3><a href="#">{{ $department->name }}</a></h3>
        </div>
        <div class="text">{{ $department->description }}</div>
        {{-- <div class="read-outer">
            <a href="#" class="read-more">Read More <span
                    class="icon fas fa-angle-double-right"></span></a>
        </div> --}}
    </div>
</div>
@endforeach
