<?php

namespace App\Http\Controllers;

use App\Models\hproducts;
use Illuminate\Http\Request;

class HproductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }
    
     
    public function index()
    {
        //
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
     * @param  \App\Models\hproducts  $hproducts
     * @return \Illuminate\Http\Response
     */
    public function show(hproducts $hproducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hproducts  $hproducts
     * @return \Illuminate\Http\Response
     */
    public function edit(hproducts $hproducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hproducts  $hproducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hproducts $hproducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hproducts  $hproducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(hproducts $hproducts)
    {
        //
    }
}
