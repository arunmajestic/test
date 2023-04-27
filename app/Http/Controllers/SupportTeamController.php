<?php

namespace App\Http\Controllers;

use App\Models\SupportTeam;
use App\Http\Requests\StoreSupportTeamRequest;
use App\Http\Requests\UpdateSupportTeamRequest;

class SupportTeamController extends Controller
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
     * @param  \App\Http\Requests\StoreSupportTeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupportTeamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SupportTeam  $supportTeam
     * @return \Illuminate\Http\Response
     */
    public function show(SupportTeam $supportTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SupportTeam  $supportTeam
     * @return \Illuminate\Http\Response
     */
    public function edit(SupportTeam $supportTeam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupportTeamRequest  $request
     * @param  \App\Models\SupportTeam  $supportTeam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSupportTeamRequest $request, SupportTeam $supportTeam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SupportTeam  $supportTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupportTeam $supportTeam)
    {
        //
    }
}
