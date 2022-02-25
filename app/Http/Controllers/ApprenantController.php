<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Apprenant::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Apprenant::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apprenant  $apprenant
     * @return \Illuminate\Http\Response
     */
    // public function show(Apprenant $apprenant)
    // {
    //     return Apprenant::find($apprenant->id);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apprenant  $apprenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apprenant $apprenant)
    {
        $apprenant = Apprenant::find($apprenant->id);
        return $apprenant->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apprenant  $apprenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apprenant $apprenant)
    {
        return Apprenant::destroy($apprenant->id);
    }

}
