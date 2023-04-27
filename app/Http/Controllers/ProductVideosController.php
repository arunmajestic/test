<?php

namespace App\Http\Controllers;

use App\Models\ProductVideos;
use App\Http\Requests\StoreProductVideosRequest;
use App\Http\Requests\UpdateProductVideosRequest;

class ProductVideosController extends Controller
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
     * @param  \App\Http\Requests\StoreProductVideosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductVideosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductVideos  $productVideos
     * @return \Illuminate\Http\Response
     */
    public function show(ProductVideos $productVideos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductVideos  $productVideos
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductVideos $productVideos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductVideosRequest  $request
     * @param  \App\Models\ProductVideos  $productVideos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductVideosRequest $request, ProductVideos $productVideos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductVideos  $productVideos
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductVideos $productVideos)
    {
        //
    }
}
