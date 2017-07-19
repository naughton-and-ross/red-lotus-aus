@extends('template')
@section('body')
<div class="pure-g">
    <div class="pure-u-1 pure-u-md-6-24">

    </div>
    <div class="pure-u-1 pure-u-md-12-24">
        <div class="l-box">
            <h1>CONTACT</h1>
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
                For bookings: <a class="body" href="mailto:redlotusaus@gmail.com">redlotusaus@gmail.com</a>
            </p>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-6-24">

    </div>
</div>
@endsection
