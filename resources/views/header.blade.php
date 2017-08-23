<header>
    <div class="pure-g">
        <div class="pure-u-1">
            <div class="pure-menu custom-menu custom-menu-top">
                <a href="/" class="pure-menu-heading custom-menu-brand">
                    <img src="{{asset('img/logo-trans.png')}}" />
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
                        <img src="{{asset('img/logo-trans.png')}}" />
                    </a></li>
                    <li class="pure-menu-item"><a href="http://redlotusaus.bigcartel.com/" class="pure-menu-link">Store</a></li>
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
