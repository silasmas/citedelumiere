<?php

namespace App\Http\Controllers;

use App\Models\predication;
use App\Rules\UrlValidationRule;
use Illuminate\Http\Request;

class PredicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preach = predication::get();
        return view('admin.pages.dashboard', compact("preach"));
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
        $request->validate([
            'urlvideo' => ['required', 'string', 'max:255', new UrlValidationRule],
        ]);
        // Récupérer la valeur du checkbox "is_live" en tant que 1 ou 0
        $isVideo = $request->is_video == '1' ? 1 : 0;
        $isSeminary = $request->is_seminary == '1' ? 1 : 0;
        // $urlVideo=null;
        // $idVideo=null;
        // if($isVideo){
        $urlVideo = $request->urlvideo;
        $idVideo = $request->video_id;
        // }
        $profile = $request->file('profil');
        if ($profile) {
            $profil = $profile == '' ? '' : 'profil/' . time() . '.' . $profile->getClientOriginalName();
            $profile == '' ? '' : $profile->move('storage/profil', $profil);
        }

        $filecover = $request->file('cover');
        $cover = $filecover == '' ? '' : 'cover/' . time() . '.' . $filecover->getClientOriginalName();
        $filecover == '' ? '' : $filecover->move('storage/cover', $cover);

        $rep = predication::create([
            'titre' => $request->titre,
            'subtitle' => $request->subtitle,
            'date' => $request->date,
            'predicateur' => $request->predicateur,
            'profil' => $profil,
            'is_video' => $isVideo,
            'is_seminary' => $isSeminary,
            'url_video' => $request->urlvideo,
            'video_id' => $request->video_id,
            'description' => $request->description,
            'cover' => $cover,
        ]);

        if ($rep) {
            return response()->json(['reponse' => true, 'msg' => "Enregistrement réussi"]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sermon = predication::find($id);
        // dd($sermon);
        if ($sermon) {
            return response()->json(['reponse' => true, 'msg' => "culte trouvé", 'data' => $sermon]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur de data."]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(predication $predication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, predication $predication)
    {
        $article = predication::find($request->id);
        if($article){
            $filecover = $request->file('cover');
            if($filecover){
                $cover = $filecover == '' ? '' : 'cover/' . time() . '.' . $filecover->getClientOriginalName();
                $filecover == '' ? '' : $filecover->move('storage/cover', $cover);
                $article->cover != $cover ? $article->cover = $cover : $article->titre;

            }

            $profile = $request->file("profil");
            // dd($$request->subtitle);
            if ($profile) {
                $profil = $profile == '' ? '' : 'profil/' . time() . '.' . $profile->getClientOriginalName();
                $profile == '' ? '' : $profile->move('storage/profil', $profil);
                $article->profil != $profil ? $article->profil = $profil : $article->profil;

            }


            $is_video = $request->is_video == '1' ? 1 : 0;
            $is_seminary = $request->is_seminary == '1' ? 1 : 0;
            $article->titre != $request->titre ? $article->titre = $request->titre : $article->titre;
            $article->subtitle != $request->subtitle ? $article->subtitle = $request->subtitle : $article->subtitle;
            $article->date != $request->date ? $article->date = $request->date : $article->date;
            $article->predicateur != $request->predicateur ? $article->predicateur = $request->predicateur : $article->predicateur;
            $article->url_video != $request->urlvideo ? $article->url_video = $request->urlvideo : $article->url_video;
            $article->video_id != $request->video_id ? $article->video_id = $request->video_id : $article->video_id;
            $article->description != $request->description ? $article->description = $request->description : $article->description;
            $article->is_video != $is_video ? $article->is_video = $is_video : $article->is_video;
            $article->is_seminary != $is_seminary ? $article->is_seminary = $is_seminary : $article->is_seminary;
            $article->url_video != $request->urlvideo ? $article->url_video = $request->urlvideo : $article->url_video;

            $article->save();
            if ($article) {
                return response()->json(['reponse' => true, 'msg' => "Modification réussie"]);
            } else {
                return response()->json(['reponse' => false, 'msg' => "Erreur de modification."]);
            }

        }else{
            return response()->json(['reponse' => false, 'msg' => "Erreur de modification."]);

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sermon = predication::find($id);
        $sermon->delete();
        if ($sermon) {
            return response()->json(['reponse' => true, 'msg' => "Suppression réussie"]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);

        }
    }
}
