<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <b>{{ $details->name }}</b> sent an enquiry to <b>@if ($catagory = "band") Red Lotus @elseif ($catagory = "studio") Studio Equilibrium @endif</b> regarding <b>{{ $details->subject }}</b>. This is what they said: <b>{{ $details->text }}</b>. Reach them at: <b>{{ $details->contact }}</b>
    </body>
</html>
