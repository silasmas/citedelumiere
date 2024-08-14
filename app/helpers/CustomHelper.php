<?php

use App\Models\chapitre;
use App\Models\culte;
use App\Models\formation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */

// Get web URL
if (!function_exists('isActive')) {
    function isActive($menu)
    {
        if (Route::current()->getName() == $menu) {
            return 'active';
        }
    }
}
if (!function_exists('liveExiste')) {
    function liveExiste()
    {
        $live_existe = culte::where("is_live", "1")->exists();

        if ($live_existe) {
            return true;
        } else {
            return false;
        }
    }
}
if (!function_exists('sexe')) {
    function sexe($info)
    {
        switch ($info) {
            case 'M':
                return 'Homme';
                break;
            case 'F':
                return 'Femme';
                break;

            default:
                return "Pas d'info du genre";
                break;
        }
    }
}
if (!function_exists('nbrByRole')) {
    function nbrByRole($role)
    {
        $users = User::whereHas('roles', function ($query) use ($role) {
            $query->where('roles.titre', $role);
        })->with('roles', 'Mesformation', 'favorie')->get();
        return $users;

    }
}
if (!function_exists('formateur')) {
    function formateur($id)
    {
        $chapitres = formation::with('formateur')->find($id);
        return $chapitres;

    }
}
if (!function_exists('nbrByChapitre')) {
    function nbrByChapitre($id)
    {
        $chapitres = chapitre::where("formation_id", $id)->get();
        return $chapitres;

    }
}
if (!function_exists('getInitials')) {
    function getInitials($string)
    {
        // Diviser la chaîne en mots
        $words = explode(' ', $string);

        // Initialiser une variable pour stocker les initiales
        $initials = '';

        // Parcourir chaque mot
        for ($i = 0; $i < min(2, count($words)); $i++) {
            // Vérifier si le mot n'est pas vide
            if (!empty($words[$i])) {
                // Ajouter la première lettre de chaque mot à la variable des initiales
                $initials .= strtoupper($words[$i][0]); // Convertir en majuscule
            }
        }

        return $initials;

    }
}
if (!function_exists('badge')) {
    function badge($valeur)
    {
        switch ($valeur) {
            case 'enseignement':
                return 'badge-success';
                break;
            case 'adoration':
                return 'badge-warning';
                break;
            case 'priere':
                return 'badge-info';
                break;

            default:
                return 'badge-danger';
                break;
        }
    }
}
if (!function_exists('routes')) {
    function routes($valeur)
    {
        switch ($valeur) {
            case 'enseignement':
                // dd($enseignement);
                return 'enseignement';
                break;
            case 'adoration':
                return 'adoration';
                break;
            case 'priere':
                return 'priere';
                break;

            default:
                return 'seminaire';
                break;
        }
    }
}
if (!function_exists('datas')) {
    function datas($valeur)
    {
        switch ($valeur) {
            case 'enseignement':
                return 'Culte d\'enseignement';
                break;
            case 'adoration':
                return 'Culte de célébration';
                break;
            case 'priere':
                return 'Jeudi biyano';
                break;
            case 'seminaire':
                return 'Séminaire';
                break;

            default:
                return 'Séminaire';
                break;
        }
    }

}

if (!function_exists('s')) {
    function s($nbr)
    {
        return $nbr > 1 ? "s" : "";
    }
}
if (!function_exists('formatted')) {
    function formatted($chapitres)
    {
        $total = 0;

        // Loop the data items
        foreach ($chapitres as $element):

            // Explode by separator :
            $temp = explode(":", $element->nbrHeure);

            // Convert the hours into seconds
            // and add to total
            $total += (int) $temp[0] * 3600;

            // Convert the minutes to seconds
            // and add to total
            $total += (int) $temp[1] * 60;

            // Add the seconds to total
            $total += (int) $temp[2];
        endforeach;

        // Format the seconds back into HH:MM:SS
        $formatted = sprintf(
            '%02d:%02d:%02d',
            ($total / 3600),
            ($total / 60 % 60),
            $total % 60
        );
        return $formatted;
    }
}
if (!function_exists('convertTimeToMinutes')) {
    function convertTimeToMinutes($time)
    {
        $parts = explode(':', $time);
        return ($parts[0] * 60) + $parts[1];
    }
}
if (!function_exists('profil')) {
    function profil($id)
    {
        $user = User::find($id);
        if ($user->profil == null) {
            return "assets/membres/images/uploads/user_image/placeholder.png";
        } else {
            return "../storage/" . $user->profil;
        }
    }
}
if (!function_exists('titre')) {
    function titre($name)
    {
        // Stocker l'utilisateur en session
        Session::put('titlem', $name);

    }
}
if (!function_exists('checkStepForm')) {
    function checkStepForm($id)
    {
        // $form = formationUser::where([["user_id", Auth::user()->id], ["formation_id", $id]])->first();
        // if ($form) {
        //     return $form->evolution;
        // } else {
        //     return false;
        // }
    }
}
