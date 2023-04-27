<?php

namespace App\Http\Controllers;

use App\Models\Robots;
use App\Http\Requests\StoreRobotsRequest;
use App\Http\Requests\UpdateRobotsRequest;

class RobotsController extends Controller
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
     * @param  \App\Http\Requests\StoreRobotsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRobotsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Robots  $robots
     * @return \Illuminate\Http\Response
     */
    public function show(Robots $robots)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Robots  $robots
     * @return \Illuminate\Http\Response
     */
    public function edit(Robots $robots)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRobotsRequest  $request
     * @param  \App\Models\Robots  $robots
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRobotsRequest $request, Robots $robots)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Robots  $robots
     * @return \Illuminate\Http\Response
     */
    public function destroy(Robots $robots)
    {
        //
    }
}
