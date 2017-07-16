@extends('template')
@section('body')
<div class="pure-g">
    <div class="pure-u-1">
        <div class="l-box">
            <h1>UPCOMING SHOWS</h1>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-7-24">

    </div>
    <div class="pure-u-1 pure-u-md-10-24">
        @foreach ($shows as $show)
        <div class="pure-u-1 show-item">
            <div class="pure-u-6-24 pure-u-md-4-24 show-date">
                <p>
                    {{$show->date}}
                </p>
            </div>
            <div class="pure-u-10-24 pure-u-md-12-24 show-name">
                <p>
                    {{$show->venue}} &middot; {{$show->time}}
                </p>
            </div>
            <div class="pure-u-7-24 show-more">
                <a href="{{$show->link}}">
                    <p>
                        More Info
                    </p>

                </a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="pure-u-1 pure-u-md-7-24">

    </div>
</div>
@endsection
