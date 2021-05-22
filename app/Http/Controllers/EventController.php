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
                'title' => $request->get('title'),
                'start' => date($request->get('start')),
                'end' => date($request->get('end')),
                'days_selected' => $request->get('days_selected'),
            ]);
            $events = Event::all();
            return Response::json(['events' => $events], HTTPResponse::$HTTP_OK);
        } catch (\Exception $e) {
            return Response::json(['error' => $e->getMessage()], HTTPResponse::$HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
