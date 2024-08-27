<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatemessageRequest;
use App\Models\message;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $messages = message::select('email', DB::raw('count(*) as total_messages'))->groupBy('email')->get();
        $messages = message::select('email', 
        DB::raw('count(*) as total_messages'),
        DB::raw('MIN(nom) as nom'), // ou MAX selon ce que vous voulez
        DB::raw('MIN(objet) as objet'),
        DB::raw('MIN(phone) as phone'),
        DB::raw('GROUP_CONCAT(message SEPARATOR "; ") as messages'))
        ->groupBy('email')
        ->get();
        // $messages = message::select('nom','email','objet','phone','message', DB::raw('count(*) as total_messages'))->groupBy('email')->get();
        // dd($messagesn);
        return view("admin.pages.message", compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'nom' => ['required', 'string', 'max:255'],
            'objet' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
        ]);
        if (!$valid->fails()) {
            $msg = message::create([
                'nom' => $request->nom,
                'email' => $request->email,
                'phone' => $request->phone,
                'objet' => $request->objet,
                'message' => $request->message,
            ]);
            if ($msg) {
                return response()->json(['reponse' => true, 'msg' => "Message envoyer avec succès"]);
            } else {
                return response()->json(['reponse' => false, 'msg' => "Erreur d'envoi de message"]);
            }
        } else {
            return response()->json(['reponse' => false, 'type' => "velidate", 'msg' => $valid->errors()->all()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemessageRequest $request, message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(message $message)
    {
        //
    }
}
