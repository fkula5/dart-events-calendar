<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $events = [];

        $entries = Event::with(['createdBy', 'venue'])->get();

        foreach ($entries as $entry){
            $events[] = [
                'title' => $entry->name,
                'start' => $entry->start_time,
                'end' => $entry->finish_time
            ];
        }

        return view('home', compact('events'));
    }
}
