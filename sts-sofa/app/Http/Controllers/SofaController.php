<?php

namespace App\Http\Controllers;

use App\Sofa;
use Illuminate\Http\Request;

class SofaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //list
        return $request->input('ctg');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sofa  $sofa
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        //detai
        return "detail" . $id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //create
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sofa  $sofa
     * @return \Illuminate\Http\Response
     */
    // public function edit(Sofa $sofa)
    // {
    //     //eidt
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sofa  $sofa
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Sofa $sofa)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sofa  $sofa
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Sofa $sofa)
    // {
    //     //
    // }
}
