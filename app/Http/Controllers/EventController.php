<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\HTTPResponse;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;

class EventController extends Controller
{
    
    public function index()
    {
        try{
            $events = Event::all();
            return Response::json(['events' => $events], HTTPResponse::$HTTP_OK);
        } catch(\Exception $e) {
            return Response::json(['error' => $e->getMessage()], HTTPResponse::$HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function create(Request $request)
    {
        try{
            Event::create([
                'event_name' => $request->get('event_name'),
                'start_date' => date($request->get('start_date')),
                'end_date' => date($request->get('end_date')),
                'days_selected' => $request->get('days_selected'),
            ]);
            $events = Event::all();
            return Response::json(['events' => $events], HTTPResponse::$HTTP_OK);
        } catch (\Exception $e) {
            return Response::json(['error' => $e->getMessage()], HTTPResponse::$HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
