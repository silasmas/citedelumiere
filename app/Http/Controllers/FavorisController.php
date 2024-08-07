<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorefavorisRequest;
use App\Http\Requests\UpdatefavorisRequest;
use App\Models\favoris;
use Illuminate\Support\Facades\Auth;

class FavorisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $active = favoris::where([['formation_id', $id], ['user_id', Auth::user()->id]])->first();
        if ($active) {
            return response()->json(['reponse' => false, 'msg' => 'Cette formation est déjà dans vos favories!!']);
        } else {
            $rap = favoris::updateOrCreate([
                'formation_id' => $id,
                'user_id' => Auth::user()->id,
            ]);
            if ($rap) {
                return response()->json(['reponse' => true, 'msg' => "Cette formation est ajouter dans vos favories avec succès."]);
            } else {
                return response()->json(['reponse' => false, 'msg' => "erreur !!"]);
            }
        }
    }
    public function favories()
    {
        titre("Mes favories");
        return view("membres.pages.favoris");
    }
   

    public function deleteFavorie($id)
    {
        $active = favoris::where([['formation_id', $id], ['user_id', Auth::user()->id]])->first();
        if ($active) {
            $active->delete();
            return response()->json(['reponse' => true, 'msg' => 'Cette formation est supprimée de vos favories!!']);
        } else {
            return response()->json(['reponse' => false, 'msg' => "erreur !!"]);
        }
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
    public function store(StorefavorisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(favoris $favoris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(favoris $favoris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefavorisRequest $request, favoris $favoris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(favoris $favoris)
    {
        //
    }
}
