<?php

namespace App\Http\Controllers;

use App\Models\chapitre;
use App\Models\formateur;
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
        return view('admin.pages.prof', compact("formations"));
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
            'cover' => ['required'],
        ]);
        // Récupérer la valeur du checkbox "is_live" en tant que 1 ou 0

        $access = $request->access == '1' ? 1 : 0;
        $profile = $request->file('pdf');
        if ($profile) {
            $profil = $profile == '' ? '' : 'pdf/' . time() . '.' . $profile->getClientOriginalName();
            $profile == '' ? '' : $profile->move('storage/pdf', $profil);
        }

        $filecover = $request->file('cover');
        $cover = $filecover == '' ? '' : 'cover/' . time() . '.' . $filecover->getClientOriginalName();
        $filecover == '' ? '' : $filecover->move('storage/cover', $cover);

        $rep = formation::create([
            'title' => $request->title,
            'pdf' => $profil,
            'subtitle' => $request->video_id,
            'is_active' => $request->is_active,
            'cursuse_id' => $request->cursusse,
            'access' => $access,
            'video' => $request->video,
            'description' => $request->description,
            'cover' => $cover,
        ]);
        $prof = formateur::create([
            'formation_id' => $rep->id,
            'user_id' => $request->prof,
        ]);

        if ($rep && $prof) {
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
    public function show2($id)
    {
        $formation = formation::with('formateur')->where('id', $id)->first();
        // dd($formation->formateur->user_id);
        if ($formation) {
            return response()->json(['reponse' => true, 'msg' => "formation trouvée", 'data' => $formation]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur de data."]);
        }
    }
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
    public function downloadPdf($id)
    {
        $formation = formation::find($id);
        $pdfPath = public_path('storage/'.$formation->pdf); // Chemin vers votre fichier PDF
        // dd($pdfPath);
        if (file_exists($pdfPath)) {
            return response()->download($pdfPath);
        } else {
            return response()->json(['message' => 'Fichier non trouvé.'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, formation $formation)
    {
        $article = formation::find($request->id);
        if ($article) {
            $filecover = $request->file('cover');
            if ($filecover) {
                $cover = $filecover == '' ? '' : 'cover/' . time() . '.' . $filecover->getClientOriginalName();
                $filecover == '' ? '' : $filecover->move('storage/cover', $cover);
                $article->cover != $cover ? $article->cover = $cover : $article->titre;

            }

            $profile = $request->file("pdf");
            // dd($$request->subtitle);
            if ($profile) {
                $profil = $profile == '' ? '' : 'pdf/' . time() . '.' . $profile->getClientOriginalName();
                $profile == '' ? '' : $profile->move('storage/pdf', $profil);
                $article->pdf != $profil ? $article->pdf = $profil : $article->profil;

            }

            $is_active = $request->is_active == '1' ? 1 : 0;
            $access = $request->access == '1' ? 1 : 0;
            $article->title != $request->title ? $article->title = $request->title : $article->title;
            $article->subtitle != $request->video_id ? $article->subtitle = $request->video_id : $article->subtitle;
            $article->date != $request->date ? $article->date = $request->date : $article->date;
            $article->categorie_id != $request->catgorie ? $article->categorie_id = $request->catgorie : $article->categorie_id;
            $article->video != $request->video ? $article->video = $request->video : $article->video;
            // $article->video_id != $request->video_id ? $article->video_id = $request->video_id : $article->video_id;
            $article->description != $request->description ? $article->description = $request->description : $article->description;
            $article->is_active != $is_active ? $article->is_active = $is_active : $article->is_active;
            $article->access != $access ? $article->access = $access : $article->access;

            $article->save();

            if ($article) {
                $pr = formateur::where([['user_id', $request->prof], ["formation_id", $request->id]])->first();
                if ($pr) {
                    $pr->user_id != $request->prof ? $pr->user_id = $request->prof : $pr->user_id = $pr->user_id;
                    $pr->save();
                }

                return response()->json(['reponse' => true, 'msg' => "Modification réussie"]);
            } else {
                return response()->json(['reponse' => false, 'msg' => "Erreur de modification."]);
            }

        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur de modification."]);

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $form = formation::find($id);
        $cover = public_path() . '/storage/' . $form->cover;
        file_exists($cover) ? unlink($cover) : '';
        $pdf = public_path() . '/storage/' . $form->pdf;
        file_exists($pdf) ? unlink($pdf) : '';
        $form->delete();
        if ($form) {
            return response()->json(['reponse' => true, 'msg' => "Suppression réussie"]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);

        }
    }
}
