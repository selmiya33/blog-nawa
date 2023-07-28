<!-- Team Block -->
@foreach ($authores as $authore)
    <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="image">
                <img src="https://images.pexels.com/photos/5327647/pexels-photo-5327647.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="" />

                <div class="overlay-box">
                    <ul class="social-icons">
                        @foreach ($authore->accounts as $account)
                            <li><a href="{{ $account->Link }}"><span class="{{ $account->icon }}"></span></a></li>
                        @endforeach
                    </ul>
                    <a href="#" class="appointment">Make Appointment</a>
                </div>

            </div>
            <div class="lower-content">
                <h3><a href="#">Dr. {{ $authore->name }}</a></h3>
                <div class="designation">{{ $authore->department?->name }}</div>
            </div>
        </div>
    </div>
@endforeach

