<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use Illuminate\Support\Facades\DB;
class CalenderController extends Controller
{


    //ensemble des evenement
    public function index(Request $request)
    {

            $data =  DB::table('events')
            ->where('user', '=',auth()->user()->id)
            ->get();
            return response()->json($data);


    }

    public function calendarEvents(Request $request)
    {
        switch ($request->type) {
           case 'create':
              $event = Events::create([
                  'event_name' => $request->event_name,
                  'event_description' => $request->event_description,
                  'event_start' => $request->event_start,
                  'event_end' => $request->event_end,
                  'user'=>auth()->user()->id,

              ]);

              return response()->json($event);
              break;

           case 'edit':
              $event = Events::find($request->id)->update([
                  'event_name' => $request->event_name,
                  'event_start' => $request->event_start,
                  'event_end' => $request->event_end,
              ]);

              return response()->json($event);
              break;

           case 'delete':
              $event = Events::find($request->id)->delete();

              return response()->json($event);
             break;

           default:
             # ...
             break;
        }


    }

    public function logout(Request $request){
        auth()->user()->tokens()->delete();

     return redirect('/');
    }

    public function loginform(Request $request)
    {
        return view('connexion.login');
    }

    public function bord()
    {
        return ;

    }

    public function tablebord()
    {
       $tablebord= DB::select('SELECT * FROM `users` u, events e WHERE e.user=u.id');
        return view('tableborde',compact('tablebord'));
    }
}
