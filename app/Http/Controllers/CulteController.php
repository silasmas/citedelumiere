<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreculteRequest;
use App\Http\Requests\UpdateculteRequest;
use App\Models\culte;

class CulteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    public function store(StoreculteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(culte $culte)
    {
        //
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
    public function update(UpdateculteRequest $request, culte $culte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(culte $culte)
    {
        //
    }
}
