@extends('template')
@section('body')
<div id="videoWrapper">
    <div id="muteYouTubeVideoPlayer"></div>
</div>
<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
    <div class="embed-container" id="mobilePlayer">
        <iframe src='https://www.youtube.com/embed/IyFFtw8uu_w' frameborder='0' allowfullscreen></iframe></div>
    </div>
<!--
<div class="pure-g">
    <div class="pure-u-1">
        <img class="pure-img" src="http://tedeschitrucksband.com/wp-content/uploads/2015/03/tedeschi-trucks-band-photo-mark-seliger.jpg" />
    </div>
</div>
-->
@endsection
