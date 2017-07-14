<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Show;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function view()
    {

        $shows = Show::all()->sortBy('date')->where('date', '>=', Carbon::now('Australia/Melbourne')->subDays(1));

        foreach ($shows as $show) {
            $show->date = date_format(Carbon::parse($show->date), "jS F");
        }

        return view('shows', [
            'shows' => $shows
        ]);
    }

    public function store(Request $data)
    {
        $show = new Show;

        $show->time = $data->time;
        $show->date = $data->date;
        $show->venue = $data->venue;
        $show->link = $data->link;

        $show->save();
    }
}
