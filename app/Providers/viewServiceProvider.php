<?php

namespace App\Providers;

use App\Models\chapitre;
use App\Models\culte;
use App\Models\cursuse;
use App\Models\formation;
use App\Models\predication;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('membres.*', function ($view) {
            // dd(Auth::user()->role->pluck("titre")->contains("Admin"));
        });
        View::composer('*', function ($view) {
            $culte = culte::get();
            $preachs = predication::orderBy('date', 'asc')->get();
            $recent = predication::orderBy('date', 'asc')->take(4)->get();
            $enseignement = predication::where("subtitle", "enseignement")->orderBy('date', 'asc')->paginate(10);
            $priere = predication::where("subtitle", "priere")->orderBy('date', 'asc')->paginate(10);
            $dimanche = predication::where("subtitle", "adoration")->orderBy('date', 'asc')->paginate(10);
            $seminaire = predication::where("is_seminary", "1")->orderBy('date', 'asc')->paginate(10);
            $live = culte::where('is_live', '1')->first();

            if (!Auth::guest()) {

                $userForm = User::with('formation', 'favorie')->where("id", Auth::user()->id)->first();
                $view->with('userForm', $userForm);
                // $userForm = User::with('formation','favorie')->find(Auth::user()->id);

            }

            $cursus = cursuse::with('formations')->get();
            $formations = formation::with('user', "formateur", 'chapitres')->get();
            $chapitres = chapitre::get();
            //  dd($formations);

            $view->with('cultes', $culte);
            $view->with('live', $live);
            $view->with('preachs', $preachs);
            $view->with('enseignement', $enseignement);
            $view->with('priere', $priere);
            $view->with('adoration', $dimanche);
            $view->with('seminaire', $seminaire);
            $view->with('formations', $formations);
            $view->with('categories', $cursus);
            $view->with('recent', $recent);
            $view->with('chapitres', $chapitres);
        });

    }
}
