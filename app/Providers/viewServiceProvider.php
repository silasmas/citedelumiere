<?php

namespace App\Providers;

use DB;
use App\Models\culte;
use App\Models\predication;
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
            $culte=culte::get();
            $preachs=predication::orderBy('date', 'asc')->get();
            $recent=predication::orderBy('date', 'asc')->take(4)->get();
            $enseignement=predication::where("subtitle","enseignement")->orderBy('date', 'asc')->paginate(10);
            $priere=predication::where("subtitle","priere")->orderBy('date', 'asc')->paginate(10);
            $dimanche=predication::where("subtitle","adoration")->orderBy('date', 'asc')->paginate(10);
            $seminaire=predication::where("is_seminary","1")->orderBy('date', 'asc')->paginate(10);
            $live=culte::where('is_live','1')->first();

            $articlesParCategories = predication::select('subtitle', DB::raw('COUNT(*) as preach'))
            ->groupBy('subtitle')
            ->get();


            $view->with('cultes', $culte);
            $view->with('live', $live);
            $view->with('preachs', $preachs);
            $view->with('enseignement', $enseignement);
            $view->with('priere', $priere);
            $view->with('adoration', $dimanche);
            $view->with('seminaire', $seminaire);
            $view->with('recent', $recent);
            $view->with('categories', $articlesParCategories);
        });

    }
}
