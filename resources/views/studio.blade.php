<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Red Lotus</title>
        <link rel="stylesheet" href="{{asset('css/studio.css')}}">
        <link rel="stylesheet" href="{{asset('css/header-studio.css')}}">
        @include('head')
        <script async src="https://www.youtube.com/iframe_api"></script>
        <script>
         function onYouTubeIframeAPIReady() {
          var player;
          var screenWidth = document.documentElement.clientWidth * 1.5;
          player = new YT.Player('muteYouTubeVideoPlayer', {
            videoId: 'cFWeW1pBYkM', // YouTube Video ID
            width: screenWidth,               // Player width (in px)
            height: 900,              // Player height (in px)
            playerVars: {
              autoplay: 1,        // Auto-play the video on load
              controls: 0,        // Show pause/play buttons in player
              showinfo: 0,        // Hide the video title
              modestbranding: 1,  // Hide the Youtube Logo
              loop: 1,            // Run the video in a loop
              fs: 0,              // Hide the full screen button
              cc_load_policy: 0, // Hide closed captions
              iv_load_policy: 3,  // Hide the Video Annotations
              autohide: 1         // Hide video controls when playing
            },
            events: {
              onReady: function(e) {
                e.target.mute();
              }
            }
          });
         }

         // Written by @labnol
        </script>
    </head>
    <body>
        <header>
            <div class="pure-g">
                <div class="pure-u-1">
                    <div class="pure-menu custom-menu custom-menu-top">
                        <a href="/" class="pure-menu-heading custom-menu-brand">
                            <img src="{{asset('img/se_logo_5.jpg')}}" />
                        </a>
                    </div>
                    <div class="pure-menu pure-menu-horizontal pure-menu-scrollable custom-menu custom-menu-bottom custom-menu-tucked" id="tuckedMenu">
                    <div class="custom-menu-screen"></div>
                        <ul class="pure-menu-list">
                            <li class="pure-menu-item logo"><a href="/" class="pure-menu-link">
                                <img src="{{asset('img/se_logo_5.jpg')}}" />
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <script>
              (function (window, document) {
              document.getElementById('toggle').addEventListener('click', function (e) {
                  document.getElementById('tuckedMenu').classList.toggle('custom-menu-tucked');
                  document.getElementById('toggle').classList.toggle('x');
              });
              })(this, this.document);
             </script>
        </header>
        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-6-24">

            </div>
            <div class="pure-u-1 pure-u-md-12-24">
                <div class="l-box">
                    <h1>ENQUIRY</h1>
                    <form method="post">
                        {{ csrf_field() }}
                        <input class="half" type="text" name="name" placeholder="Your name" />
                        <input class="half" type="text" name="contact" placeholder="An email, phone number etc." />
                        <input type="text" name="subject" placeholder="Subject" />
                        <textarea name="text" placeholder="Your message:"></textarea>
                        <button type="submit" value="Submit">Submit</button>
                    </form>
                </div>
            </div>
            <div class="pure-u-1 pure-u-md-6-24">

            </div>
        </div>
        @include('footer')
    </body>
</html>
