<?php

namespace App\Http\Controllers;

use App\Models\Booth;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class EventController extends Controller
{
  public function index()
{
    $id_user = auth()->user()->id;
    $detail_event = Event::where('user_id', $id_user)->get();
    return view('Backend.event.event', compact('detail_event'));
}


    public function show($id_event)
{
    $detail_event = Event::findOrFail($id_event);
    $url = route('event.show', ['id_event' => $id_event]); 
    $qrCodes['simple'] = QrCode::size(150)->generate($url);
    $booths = Booth::where('id_event', $id_event)->get();
 return view('Backend.event.detail_event', compact('detail_event', 'qrCodes', 'booths'));
}

}