<?php

namespace App\Http\Controllers;

use App\Models\GlobalFAQs;
use App\Http\Requests\StoreGlobalFAQsRequest;
use App\Http\Requests\UpdateGlobalFAQsRequest;

class GlobalFAQsController extends Controller
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
     * @param  \App\Http\Requests\StoreGlobalFAQsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGlobalFAQsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GlobalFAQs  $globalFAQs
     * @return \Illuminate\Http\Response
     */
    public function show(GlobalFAQs $globalFAQs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GlobalFAQs  $globalFAQs
     * @return \Illuminate\Http\Response
     */
    public function edit(GlobalFAQs $globalFAQs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGlobalFAQsRequest  $request
     * @param  \App\Models\GlobalFAQs  $globalFAQs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGlobalFAQsRequest $request, GlobalFAQs $globalFAQs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GlobalFAQs  $globalFAQs
     * @return \Illuminate\Http\Response
     */
    public function destroy(GlobalFAQs $globalFAQs)
    {
        //
    }
}
