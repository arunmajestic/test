<?php

namespace App\Http\Controllers;

use App\Models\ProductAudio;
use App\Http\Requests\StoreProductAudioRequest;
use App\Http\Requests\UpdateProductAudioRequest;

class ProductAudioController extends Controller
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
     * @param  \App\Http\Requests\StoreProductAudioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductAudioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductAudio  $productAudio
     * @return \Illuminate\Http\Response
     */
    public function show(ProductAudio $productAudio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductAudio  $productAudio
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductAudio $productAudio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductAudioRequest  $request
     * @param  \App\Models\ProductAudio  $productAudio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductAudioRequest $request, ProductAudio $productAudio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductAudio  $productAudio
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductAudio $productAudio)
    {
        //
    }
}
