<?php

namespace App\Http\Controllers;

use App\Models\postType;
use App\Http\Requests\StorepostTypeRequest;
use App\Http\Requests\UpdatepostTypeRequest;

class PostTypeController extends Controller
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
     * @param  \App\Http\Requests\StorepostTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepostTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\postType  $postType
     * @return \Illuminate\Http\Response
     */
    public function show(postType $postType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\postType  $postType
     * @return \Illuminate\Http\Response
     */
    public function edit(postType $postType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepostTypeRequest  $request
     * @param  \App\Models\postType  $postType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepostTypeRequest $request, postType $postType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\postType  $postType
     * @return \Illuminate\Http\Response
     */
    public function destroy(postType $postType)
    {
        //
    }
}
