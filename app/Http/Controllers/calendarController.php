<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event as Event;

class calendarController extends Controller
{
    public function display()
    {
        return view('calendar.display');
    }

    public function json()
    {
        $content = Event::all()->toJson();
        return response($content)->withHeaders([
            'Content-Type' => 'application/json',
            'Charset' => 'UTF-8'
        ]);
    }
}