<?php

namespace App\Http\Controllers;

use App\Models\SM;
use App\Http\Requests\StoreSMRequest;
use App\Http\Requests\UpdateSMRequest;

class SMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Http\Requests\StoreSMRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSMRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SM  $sM
     * @return \Illuminate\Http\Response
     */
    public function show(SM $sM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SM  $sM
     * @return \Illuminate\Http\Response
     */
    public function edit(SM $sM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSMRequest  $request
     * @param  \App\Models\SM  $sM
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSMRequest $request, SM $sM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SM  $sM
     * @return \Illuminate\Http\Response
     */
    public function destroy(SM $sM)
    {
        //
    }
}
