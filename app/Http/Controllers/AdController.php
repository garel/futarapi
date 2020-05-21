<?php

namespace App\Http\Controllers;

use App\Ad;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Collection;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Ad[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Ad::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Ad $ad
     * @return Ad
     */
    public function show(Ad $ad)
    {
        return $ad;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ad $ad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad $ad)
    {
        //
    }
}
