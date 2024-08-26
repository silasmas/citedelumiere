<?php

namespace App\Http\Controllers;

use App\Models\culte;
use App\Models\predication;
use App\Rules\UrlValidationRule;
use Illuminate\Http\Request;

class CulteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function culte()
    {
        $cultes = culte::get();
        return view('admin.pages.dashboard', compact("cultes"));
    }
    public function index()
    {
        return view('pages.home');
    }
    public function about()
    {
        $banniere = "about";
        return view('pages.about', compact("banniere"));
    }
    public function contact()
    {
        $banniere = "contact";
        return view('pages.contact', compact("banniere"));
    }
    public function programmes()
    {
        $banniere = "contact";
        return view('pages.programme', compact("banniere"));
    }
    public function membre()
    {
        $banniere = "contact";
        return view('pages.membre', compact("banniere"));
    }
    public function enseignement()
    {
        $banniere = "enseignement";
        return view('pages.programmes.detailProgramme', compact("banniere"));
    }
    public function priere()
    {
        $banniere = "priere";
        return view('pages.programmes.detailProgramme', compact("banniere"));
    }
    public function adoration()
    {
        $banniere = "adoration";
        return view('pages.programmes.detailProgramme', compact("banniere"));
    }
    public function seminaire()
    {
        $banniere = "seminaire";
        return view('pages.programmes.detailProgramme', compact("banniere"));
    }
    public function detail($id)
    {
        $banniere = "seminaire";
        $info = predication::find($id);

        $avant = $info::where('id', '<', $id)
            ->orderBy('id', 'desc')
            ->first();

        $apres = $info::where('id', '>', $id)
            ->orderBy('id', 'asc')
            ->first();
        return view('pages.programmes.detail', compact("banniere", 'info', 'avant', 'apres'));

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
            'titre' => ['required', 'string', 'max:255'],
            'urlvideo' => ['required'],
        ]);

        if (liveExiste()) {
            return response()->json(['reponse' => false, 'msg' => "Impossible de mettre ce culte en live car un autre est déjà en ligne."]);
        } else {
            // Récupérer la valeur du checkbox "is_live" en tant que 1 ou 0
            $isLive = $request->is_live == '1' ? 1 : 0;
            $file = $request->file('cover');

            $cover = $file == '' ? '' : 'cover/' . time() . '.' . $file->getClientOriginalName();
            $file == '' ? '' : $file->move('storage/cover', $cover);
            $rep = culte::create([
                'titre' => $request->titre,
                'description' => $request->description,
                'is_live' => $isLive,
                'urlvideo' => $request->urlvideo,
                'cover' => $cover,
                'type' => $request->type,
            ]);

            if ($rep) {
                return response()->json(['reponse' => true, 'msg' => "Enregistrement réussi"]);
            } else {
                return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);

            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $culte = culte::find($id);
        // dd($culte->message);
        if ($culte) {
            return response()->json(['reponse' => true, 'msg' => "culte trouvé", 'data' => $culte]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur."]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(culte $culte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, culte $culte)
    {
        $live = culte::where("is_live", "1")->first();
        $article = culte::find($request->id);
        if (liveExiste()) {
            if ($live->id != $article->id) {
                return response()->json(['reponse' => false, 'msg' => "Impossible de mettre ce culte en live car un autre est déjà en ligne."]);
            } else {

                $isLive = $request->is_live == '1' ? 1 : 0;
                $article->titre != $request->titre ? $article->titre = $request->titre : $article->titre;
                $article->description != $request->description ? $article->description = $request->description : $article->description;
                $article->is_live != $isLive ? $article->is_live = $isLive : $article->is_live;
                $article->urlvideo != $request->urlvideo ? $article->urlvideo = $request->urlvideo : $article->urlvideo;
                $article->type != $request->type ? $article->type = $request->type : $article->type;

                $file = $request->file("cover");
                if ($file) {
                    $img1 = $file == '' ? '' : 'cover/' . time() . '.' . $file->getClientOriginalName();
                    $file == '' ? '' : $file->move('storage/cover', $img1);
                    $article->cover != $img1 ? $article->cover = $img1 : $article->cover;
                }
                $article->save();
                if ($article) {
                    return response()->json(['reponse' => true, 'msg' => "Modification réussie"]);
                } else {
                    return response()->json(['reponse' => false, 'msg' => "Erreur de modification."]);
                }
            }
        } else {
            $isLive = $request->is_live == '1' ? 1 : 0;
            $article->titre != $request->titre ? $article->titre = $request->titre : $article->titre;
            $article->description != $request->description ? $article->description = $request->description : $article->description;
            $article->is_live != $isLive ? $article->is_live = $isLive : $article->is_live;
            $article->urlvideo != $request->urlvideo ? $article->urlvideo = $request->urlvideo : $article->urlvideo;
            $article->type != $request->type ? $article->type = $request->type : $article->type;

            $file = $request->file("cover");
            if ($file) {
                $img1 = $file == '' ? '' : 'cover/' . time() . '.' . $file->getClientOriginalName();
                $file == '' ? '' : $file->move('storage/cover', $img1);
                $article->cover != $img1 ? $article->cover = $img1 : $article->cover;
            }
            $article->save();
            if ($article) {
                return response()->json(['reponse' => true, 'msg' => "Modification réussie"]);
            } else {
                return response()->json(['reponse' => false, 'msg' => "Erreur de modification."]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $culte = culte::find($id);
        $culte->delete();
        if ($culte) {
            return response()->json(['reponse' => true, 'msg' => "Suppression réussie"]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);

        }
    }
}
