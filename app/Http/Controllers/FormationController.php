<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateformationRequest;
use App\Models\chapitre;
use App\Models\formation;
use App\Models\formationUser;
use App\Models\User;
use App\Rules\PhoneNumber;
use App\Rules\UrlValidationRule;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Rules\Password;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("membres.pages.home");
    }
    public function admin_form()
    {
        $formations = formation::get();
        return view('admin.pages.dashboard', compact("formations"));
    }
    public function admin_exam()
    {
        $formations = formation::get();
        return view('admin.pages.dashboard', compact("formations"));
    }
    public function admin_student()
    {
        return view('admin.pages.students');
    }
    public function admin_users()
    {
        $formations = formation::get();
        return view('admin.pages.dashboard', compact("formations"));
    }
    public function admin_prof()
    {
        $formations = formation::get();
        return view('admin.pages.dashboard', compact("formations"));
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
            'video' => ['required', 'string', 'max:255', new UrlValidationRule],
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

        $rep = formation::create([
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
    public function cours($id)
    {
        $detail = formation::with('chapitre', 'user')->where('id', $id)->first();
        $formateur = User::where('prof', "1")->get();
        $chapitre = chapitre::where('formation_id', $id)->first();
        if ($chapitre == null) {
            return back()->with('messageErr', 'Cette formation n\'est pas encore prête');
        } else {
            $chap = chapitre::find($chapitre->id);
            return view('client.connecte.pages.lecturForm', compact("chap", 'detail', 'chapitre', 'formateur'));
        }
        return view('client.connecte.pages.lecturForm', compact('detail', 'chapitre', 'formateur'));

    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detail = formation::with('chapitres', 'user')->where('id', $id)->first();
        $formateur = User::whereHas('roles', function ($query) {
            $query->where('titre', 'prof');
        })->get();
        $chapitres = chapitre::where('formation_id', $id)->get();
        // dd($chapitres);

        return view('membres.pages.detail', compact('detail', 'chapitres', 'formateur'));
        // return view("client.pages.detailform");
    }
    public function compte()
    {
        titre("Mon Compte");
        return view('membres.pages.templateProfil');
    }

    public function photo()
    {
        titre("Photo");
        return view('membres.pages.templateProfil');
    }
    public function detailformation($id)
    {
        $detail = formation::with('chapitres', 'user', 'formateur')->where('id', $id)->first();
        $formateur = User::whereHas('roles', function ($query) {
            $query->where('titre', 'prof');
        })->get();
        $chapitres = chapitre::where('formation_id', $id)->get();
        dd($chapitres);

        return view('membres.pages.detail', compact('detail', 'chapitres', 'formateur'));

    }
    public function beginForm($id)
    {
        $debut = formationUser::updateOrCreate([
            'formation_id' => $id,
            'user_id' => Auth::user()->id,
        ]);
        if ($debut) {
            $detail = formation::with('chapitres', 'user')->where('id', $id)->first();
            $formateur = User::whereHas('roles', function ($query) {
                $query->where('titre', 'prof');
            })->get();
            $chapitre = chapitre::where('formation_id', $id)->first();
            if ($chapitre == null) {
                return back()->with('messageErr', 'Cette formation n\'est pas encore prête');
            } else {
                $chap = chapitre::find($chapitre->id);
                return view('membres.pages.lecturForm', compact("chap", 'detail', 'chapitre', 'formateur'));
            }

        } else {
            return back()->with('messageErr', 'Cette formation n\'est pas encore prête');
        }

    }
    public function mesFormations(): View
    {
        titre("Mes formations");
        return view("membres.pages.mesCours");
    }
    public function profil()
    {
        titre("Mon Profil");
        return view('membres.pages.templateProfil');
    }
    public function editCompte(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'password' => ['required', 'confirmed', Password::defaults()],
            'oldpassword' => ['required', Password::defaults()],
        ]);
        // dd($valid);
        if (!$valid->fails()) {
            $u = User::where("id", Auth::user()->id)->first();
            if (Hash::check($request->oldpassword, $u->password)) {
                $u->email = $request->email;
                $u->password = Hash::make($request->password);
                $u->save();
                if ($u) {
                    return response()->json(['reponse' => true, 'msg' => "Compte mis à jour avec succès"]);
                } else {
                    return response()->json(['reponse' => false, 'msg' => "Erreur de mis à jour"]);
                }
            } else {
                return response()->json(['reponse' => false, 'msg' => "Ancien mot de passe incorrect"]);
            }
        } else {
            return response()->json(['reponse' => false, 'type' => "velidate", 'msg' => $valid->errors()->all()]);
        }
    }
    public function editProfil(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'sexe' => ['required', 'string', 'max:255'],
            'ville' => ['required', 'string', 'max:255'],
            'pays' => ['required', 'string', 'max:255'],
            'phone' => ['required', new PhoneNumber],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
        $u = User::where("id", Auth::user()->id)->first();
        // dd($u);
        $u->name = $request->name;
        $u->prenom = $request->prenom;
        $u->sexe = $request->sexe;
        $u->ville = $request->ville;
        $u->phone = $request->phone;
        $u->pays = $request->pays;
        // $u->email= $request->email;

        $u->save();
        if ($u) {
            event(new Registered($u));

            Auth::login($u);
            $msg = ["msg" => "Profil mis à jour avec succès", "type" => "success"];
            return back()->with('message', $msg);
        } else {
            $msg = ["msg" => "Erreur de mise à jour du profil", "type" => "danger"];
            return back()->with('message', $msg);
        }
    }
    public function editphoto(Request $request)
    {
        $por = Validator::make($request->all(), [
            'photo' => 'required|sometimes|image',
        ]);
        if ($por->passes()) {

            $file = $request->file('photo');

            $filenameImg = 'profil/' . time() . '.' . $file->getClientOriginalName();
            $file->move('storage/profil', $filenameImg);
            if ($request->photo) {
                $user = User::find(Auth::user()->id);
                $user->profil = $filenameImg;
                $user->save();
                event(new Registered($user));
                $msg = "La photo est mis à jour avec succès";
                return back()->with('message', $msg);
            } else {
                $msg = ["msg" => "Erreur mis à jour avec succès", "type" => "danger"];
                return response()->json('message', $msg);
            }

        } else {
            return back()->with(['message' => $por->errors()->first()]);
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(formation $formation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateformationRequest $request, formation $formation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(formation $formation)
    {
        //
    }
}
