<div class="container">
    <div class="post-body">
        <div class="offset-1" style="height: 48vh; overflow:auto; overflow-x: hidden;">
            @foreach ($users as $user)
            <div class="row">
                <span class="name mt-3"> {{ $user->name }} <span class="time">account was created</span></span>
                <span class="time">at {{ $user->created_at->format('l, d F Y g:i A') }} </span>
            </div>
            @endforeach
            @if($users->isEmpty())
            <div class="text-gray-500">
                <h5 class="text-center mt-3">No users found.</h5>
            </div>
            @endif
        </div>
    </div>
</div>
