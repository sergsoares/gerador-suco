<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flavor;

class FlavorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flavors = Flavor::all();
        $comboOption = $this->generateNewFlavorCombo();

        return View('flavors', compact('flavors', 'comboOption'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function generateNewFlavorCombo()
    {
        $flavors = Flavor::all();
        $maxFlavors = $flavors->count();

        $firtFlavor = $flavors[rand(0, $maxFlavors-1)];
        $secondFlavor = $flavors[rand(0, $maxFlavors-1)];
        
        $newCombroString = $firtFlavor->name." com ".$secondFlavor->name;
        return $newCombroString;
    }
}
