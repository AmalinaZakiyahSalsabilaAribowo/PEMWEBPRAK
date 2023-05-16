<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index')->with('events', $events);
    } 

    public function showValidateForm()
    {
        return view('events.validate');
    }
    
    public function validateForm(Request $request)
    {
        $request->validate([
        'location' => 'required|alpha|min:3|max:50',
        'name' => 'required|string|min:3|max:50'
        ]);
        return back()->with('success','Data valid');
    }
}

use App\Models\Event;


