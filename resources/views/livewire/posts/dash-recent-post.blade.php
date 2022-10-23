<div class="container">
    <div class="post-body">
        <div class="offset-1" style="height: 48vh; overflow:auto; overflow-x: hidden;">
            @foreach ($recents as $recent)
            <div class="row">
                <span class="name mt-3"> {{ $recent->user->name }} <span class="time">has a post</span></span>
                <span class="time">at {{ $recent->created_at->format('g:i A') }} </span>
            </div>
            @endforeach
        </div>
    </div>
</div>

