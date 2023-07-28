<div class="comments-area">

    <div class="group-title">
        <h2>Comments 0{{ $comments->count() + $comments->sum('replies_count') }}</h2>
    </div>

    <!--Comment Box-->
    @foreach ($comments as $comment)
        <div class="comment-box">
            <div class="comment">
                <div class="author-thumb"><img
                        src="https://images.pexels.com/photos/2076968/pexels-photo-2076968.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="">
                </div>
                <div class="comment-inner">
                    <div class="comment-info clearfix"><strong>{{ $comment->user->name }} </strong>
                        <div class="comment-time">{{ $comment->created_at->format('M d, Y') }}</div>
                    </div>
                    <div class="text">{{ $comment->comment }}</div>
                    {{-- <a class="comment-reply" href="#"><span class="fas fa-reply-all"></span>Reply</a> --}}
                </div>
            </div>
        </div>

        <!--replay Box-->
        @foreach($comment->replies as $reply)
        <div class="comment-box reply-comment">
            <div class="comment">
                <div class="author-thumb"><img src="https://th.bing.com/th/id/R.c11b6f38dffc24a4508217513b0e50bd?rik=Pt%2bkITlukiMkWg&riu=http%3a%2f%2fwww.emmegi.co.uk%2fwp-content%2fuploads%2f2019%2f01%2fUser-Icon.jpg&ehk=zjS04fF4nxx%2bpkvRPsSezyic3Z7Yfu%2fuoT75KnbNv1Y%3d&risl=&pid=ImgRaw&r=0" alt="">
                </div>
                <div class="comment-inner">
                    <div class="comment-info clearfix"><strong>Dr. {{ $reply->authore->name }}</strong>
                        <div class="comment-time">{{ $reply->created_at->format('M d, Y') }}</div>
                    </div>
                    <div class="text">{{ $reply->reply }}</div>
                    {{-- <a class="comment-reply" href="#"><span class="fas fa-reply-all"></span>Reply</a> --}}
                </div>
            </div>
        </div>
        @endforeach
        <!-- replay Form -->
        <div class="comment-form">
            <!-- Comment Form -->
            <form method="post" action="{{ route('reply.store') }}">
                @csrf

                <input type="hidden" name="articale_id" value="{{ $comment->articale_id }}" hidden>
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" hidden>
                <div class="row clearfix">
                    <div class="col-lg-9 col-md-9 col-sm-9 form-group">
                        <input type="text" name="reply" placeholder="Your replay" required>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <button class="theme-btn comment-btn " type="submit" name="submit-form" style="display: inline; /* Add other inline styles here */">Reply</button>
                    </div>
                </div>
            </form>
        </div>
    @endforeach
</div>
