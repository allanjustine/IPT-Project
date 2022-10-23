<div class="container">
    <div class="profile">
        <h2 class="mt-3" style="font-family: Comic Sans MS">Recent Posts</h2>
    </div>
    <div class="post-body">
        <div class="col-md-6 mt-5 offset-3">
            @if (session('message'))
                <div id="messagee" class="alert text-black text-center text-black">{{ session('message') }}</div>
            @endif
            @foreach ($recents as $recent)
            <div class="card shadow-md mt-3" id="cardd" style="width: 560px">
                <div class="card-header">
                    <span class="float-end" id="titlee">
                        <span class="float-end" id="titleee">-{{ $recent->title }}</span>
                        <span class="
                        {{($recent->title === 'Feeling Sick')? 'font-icon fa-solid fa-face-thermometer': '' }}
                        {{($recent->title === 'Feeling Sad')? 'font-icon fa-solid fa-face-sad-sweat': '' }}
                        {{($recent->title === 'Feeling Emotional')? 'font-icon fa-solid fa-face-holding-back-tears': '' }}
                        {{($recent->title === 'Feeling Broken')? 'font-icon-heart fa-solid fa-heart-crack': '' }}
                        {{($recent->title === 'Feeling Happy')? 'font-icon fa-solid fa-face-smile': '' }}
                        {{($recent->title === 'Feeling Cute')? 'font-icon fa-solid fa-face-grin-stars': '' }}
                        {{($recent->title === 'Feeling Loved')? 'font-icon fa-solid fa-face-smile-hearts': '' }}
                        {{($recent->title === 'Feeling Thankful')? 'font-icon fa-solid fa-face-smiling-hands': '' }}
                        {{($recent->title === 'Feeling Angry')? 'font-icon fa-solid fa-face-swear': '' }}
                        {{($recent->title === 'Feeling Crazy')? 'font-icon fa-solid fa-face-woozy': '' }}
                        {{($recent->title === 'Feeling Hopeful')? 'font-icon fa-solid fa-face-awesome': '' }}
                        {{($recent->title === 'Feeling Proud')? 'font-icon fa-solid fa-face-beam-hand-over-mouth': '' }}
                        {{($recent->title === 'Feeling Fresh')? 'font-icon fa-solid fa-face-clouds': '' }}
                        {{($recent->title === 'Feeling Blessed')? 'font-icon fa-solid fa-face-smile-halo': '' }}
                        {{($recent->title === 'Feeling Bad')? 'font-icon fa-solid fa-face-angry-horns': '' }}
                        {{($recent->title === 'Feeling Rich')? 'font-icon fa-solid fa-face-tongue-money': '' }}
                        {{($recent->title === 'Feeling Betrayed')? 'font-icon fa-solid fa-face-weary': '' }}
                        {{($recent->title === 'Feeling Sleepy')? 'font-icon fa-solid fa-face-sleeping': '' }}
                        {{($recent->title === 'Feeling Nervous')? 'font-icon fa-solid fa-face-persevering': '' }}
                        {{($recent->title === 'Feeling Uncomfortable')? 'font-icon fa-solid fa-face-pleading': '' }}
                        {{($recent->title === 'Feeling Cold')? 'font-icon fa-solid fa-face-icecles': '' }}
                        {{($recent->title === 'Feeling Lol')? 'font-icon fa-solid fa-face-grin-tears': '' }}
                        {{($recent->title === 'Feeling In loved')? 'font-icon fa-solid fa-face-kiss-wink-hearts': '' }}
                        {{($recent->title === 'Feeling Incomplete')? 'font-icon fa-solid fa-face-dotted': '' }}
                        {{($recent->title === 'Feeling Cool')? 'font-icon fa-solid fa-face-sunglasses': '' }}
                        {{($recent->title === 'Feeling Cool')? 'font-icon fa-solid fa-face-surprise': '' }}
                        {{($recent->title === 'Feeling Cool')? 'font-icon fa-solid fa-face-sad-cry': '' }}
                        {{($recent->title === 'Feeling Explode')? 'font-icon fa-solid fa-face-explode': '' }}
                        {{($recent->title === 'Feeling Disguise')? 'font-icon fa-solid fa-face-disguise': '' }}
                        "></span></span>
                        <img class="profile2" src="
                        {{($recent->user->gender === 'Male') ? asset('images/male.png') : ''}}
                        {{($recent->user->gender === 'Female') ? asset('images/female.png') : ''}}
                        {{($recent->user->gender === 'Transgender') ? asset('images/transgender.png') : ''}}
                        {{($recent->user->gender === 'Bisexual') ? asset('images/bisexual.png') : ''}}
                        ">
                    <span class="name">{{ $recent->user->name }}</span><br>
                    <span class="time">{{ $recent->created_at->format('g:i A') }}</span>
                </div>
                <div class="card-body">
                    <div class="contentt"><span>{{ $recent->content }}</span></div>
                </div>
                <div class="card-footer">
                    <span id="lc"><i class="fa-light fa-thumbs-up"></i> Like</span>
                    <span id="lc"><i class="fa-light fa-message"></i> Comment</span>
                    <span class="float-end" id="genderr">&nbsp;{{ $recent->user->gender }}</span>
                    <div class="float-end
                        {{($recent->user->gender === 'Male')? 'male fa-regular fa-mars': '' }}
                        {{($recent->user->gender === 'Female')? 'female fa-regular fa-venus': '' }}
                        {{($recent->user->gender === 'Bisexual')? 'bisexual fa-regular fa-venus-mars': '' }}
                        {{($recent->user->gender === 'Transgender')? 'transgender fa-regular fa-transgender': '' }}">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Back to top</button>
</div>

<style>
    .name {
        color: whitesmoke;
        font-size: 20px;
        text-decoration: none;
        cursor: pointer;
    }
    .name:hover {
        color: rgb(204, 202, 202);
    }
    #cardd {
        background-color: rgba(116, 115, 115, 0.661);
        color: whitesmoke;
    }
    .time {
        font-size: 13px;
        margin-left: 45px;
        opacity: 0.8;
    }
    .contentt span {
        font-size: 19px;
    }
    #titlee {
        color: rgb(21, 21, 103);
        font-weight: bold;
        font-style: italic;
        font-size: 14px;
        opacity: 0.8;
    }
    #titleee {
        margin-right: 15px;
        margin-top: 5px;
    }
    #genderr {
        color: rgb(21, 21, 103);
        font-weight: bold;
        font-style: italic;
        font-size: 13px;
        opacity: 0.8;
    }
    .alert {
        background-color: rgba(0, 0, 0, 0.12);
    }
    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 16px;
        border: none;
        outline: none;
        background-color: rgb(8, 61, 3);
        background-color: rgb(9, 85, 2);
        color: rgb(180, 175, 175);
        cursor: pointer;
        border-radius: 4px;
        padding: 5px;
    }
    #myBtn:hover {
        background-color: rgb(8, 61, 3);
    }
    #lc {
        padding: 5px 50px 5px 50px;
        border-radius: 5px;
        cursor: pointer;
    }
    #lc:hover {
        background-color: rgba(89, 88, 88, 0.593);
    }
    .male {
        background-color: rgb(5, 5, 147);
        padding: 3px;
        border-radius: 3px;
    }
    .female {
        background-color: rgb(243, 27, 239);
        padding: 3px;
        border-radius: 3px;
    }
    .bisexual {
        background-image: linear-gradient(to left, violet, indigo, blue, green, rgba(255, 255, 0, 0.275), rgba(255, 166, 0, 0.407), red);
        padding: 3px;
        color: rgb(229, 220, 229);
        border-radius: 3px;
    }
    .transgender {
        background-image: linear-gradient(to left, rgb(42, 162, 242), rgb(206, 115, 189),rgb(245, 229, 246), rgb(206, 115, 189), rgb(42, 162, 242));
        padding: 3px;
        color: rgb(23, 17, 84);
        border-radius: 3px;
    }
    .font-icon {
        font-size: 30px;
        border-radius: 50%;
        padding: 2px;
        opacity: 0.8;
        color: rgb(241, 241, 33);
    }
    .font-icon-heart {
        font-size: 30px;
        border-radius: 50%;
        padding: 2px;
        color: red;
        opacity: 0.8;
    }
    #dot-icon {
        padding: 5px 12px 5px 12px;
        background-color: rgb(206, 204, 204);
        border-radius: 50%;
        cursor: pointer;
    }
    #dot-icon:hover {
        background-color: rgb(230, 224, 224);;
    }
    .profile2 {
        width: 40px;
        border: 1px solid rgb(66, 65, 65);
        padding: 4px;
        height: 40px;
        border-radius: 50%;
    }
</style>


<script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

    setTimeout(function() {
        var msg = document.getElementById("messagee");
        msg.parentNode.removeChild(msg);
    }, 1500);
</script>
