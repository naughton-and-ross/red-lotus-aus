@extends('template')
@section('body')
<div class="pure-g">
    <div class="pure-u-1">
        <div class="l-box">
            <h1>Upcoming Shows (Public Listing)</h1>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-7-24">

    </div>
    <div class="pure-u-1 pure-u-md-10-24">
        @foreach ($shows as $show)
        <div class="pure-u-1 show-item">
            <div class="pure-u-7-24 show-date">
                <p>
                    {{$show->date}}
                </p>
            </div>
            <div class="pure-u-9-24 show-name">
                <p>
                    {{$show->venue}} &middot; {{$show->time}}
                </p>
            </div>
            <div class="pure-u-7-24 show-more">
                <a href="{{$show->link}}">
                    <p>
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </p>

                </a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="pure-u-1 pure-u-md-7-24">
    </div>
</div>
<div class="pure-g">
    <div class="pure-u-1">
        <h1>Add Show</h1>
    </div>
    <div class="pure-u-1 pure-u-md-7-24">

    </div>
    <div class="pure-u-1 pure-u-md-10-24">
        <div class="pure-u-1 show-item">
            <form class="pure-form" method="post" action="/shows">
                <fieldset>
                    {{ csrf_field() }}
                    <input type="text" name="time" placeholder="Time (eg. 9:30PM)">
                    <input type="date" name="date">
                    <input type="text" name="venue" placeholder="Venue Name">
                    <input type="text" name="link" placeholder="Link for tickets/info">

                    <button type="submit" class="pure-button">Post Gig</button>
                </fieldset>
            </form>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-7-24">

    </div>
</div>
@endsection
