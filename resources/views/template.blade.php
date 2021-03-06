<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Red Lotus</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/header.css')}}">
        @include('head')
        <script async src="https://www.youtube.com/iframe_api"></script>
        <script>
         function onYouTubeIframeAPIReady() {
          var player;
          var isUnMuted = false;
          var screenWidth = document.documentElement.clientWidth * 1.5;
          player = new YT.Player('muteYouTubeVideoPlayer', {
            videoId: 'UdSwKjHGoE0', // YouTube Video ID
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
                player.mute();
            },
            onStateChange: function () {
               if (player.isMuted() && player.getPlayerState() == 2 && !isUnMuted) {
                   player.unMute();
                   player.playVideo();
                   isUnMuted = true;
               }
           }
            }
          });
         }

         $('#muteYouTubeVideoPlayer').click(function(){
          player.unMute();
        });

         // Written by @labnol
        </script>
    </head>
    <body>
        @include('header')
        @yield('body')
        @include('footer')
    </body>
</html>
