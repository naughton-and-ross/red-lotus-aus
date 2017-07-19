<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Red Lotus</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/header-studio.css')}}">
        @include('head')
    </head>
    <body>
        <header>
            <div class="pure-g">
                <div class="pure-u-1">
                    <div class="pure-menu custom-menu custom-menu-top">
                        <a href="/" class="pure-menu-heading custom-menu-brand">
                            <img class="se" src="{{asset('img/se.png')}}" />
                        </a>
                        <a href="#" class="custom-menu-toggle" id="toggle"><s class="bar"></s><s class="bar"></s><s class="bar"></s></a>
                    </div>
                    <div class="pure-menu pure-menu-horizontal pure-menu-scrollable custom-menu custom-menu-bottom custom-menu-tucked" id="tuckedMenu">
                    <div class="custom-menu-screen"></div>
                        <ul class="pure-menu-list">
                            <li class="pure-menu-item"><a href="music" class="pure-menu-link">Music</a></li>
                            <li class="pure-menu-item"><a href="lyrics" class="pure-menu-link">Lyrics</a></li>
                            <li class="pure-menu-item"><a href="shows" class="pure-menu-link">Shows</a></li>
                            <li class="pure-menu-item logo"><a href="/" class="pure-menu-link">
                                <img src="{{asset('img/se.png')}}" />
                            </a></li>
                            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Store</a></li>
                            <li class="pure-menu-item"><a href="contact" class="pure-menu-link">Contact</a></li>
                            <li class="pure-menu-item"><a href="studio" class="pure-menu-link">Studio</a></li>

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
        <div class="pure-g" style="background-color: black">
            <div class="pure-u-1 pure-u-md-6-24">

            </div>
            <div class="pure-u-1 pure-u-md-12-24">
                <div class="l-box">
                    <h1>ENQUIRY</h1>
                    @if (Session::has('status'))
                        <h2>{!! session('status') !!}</h2>
                   @endif
                    <form method="post">
                        {{ csrf_field() }}
                        <input class="half" type="text" name="name" placeholder="Your name" />
                        <input class="half" type="text" name="contact" placeholder="An email, phone number etc." />
                        <input type="text" name="subject" placeholder="Subject" />
                        <textarea name="text" placeholder="Your message:"></textarea>
                        <button type="submit" value="Submit">Submit</button>
                    </form>
                    <p class="form">
                        or, contaqct us directly at <a class="body" href="mailto:studioequilibrium@gmail.com">studioequilibrium@gmail.com</a>
                    </p>
                </div>
            </div>
            <div class="pure-u-1 pure-u-md-6-24">

            </div>
        </div>
        @include('footer')
    </body>
</html>
