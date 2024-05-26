<?php

namespace App\Http\Controllers;

use App\Models\Set;
use App\Http\Requests\StoreSetRequest;
use App\Http\Requests\UpdateSetRequest;
use App\Http\Resources\SetResource;

class SetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SetResource::collection(Set::all());
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {

    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSetRequest $request)
    {
        $set = Set::create($request->all());
        return new SetResource($set);
    }

    /**
     * Display the specified resource.
     */
    public function show(Set $set)
    {
        return new SetResource($set);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Set $set)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSetRequest $request, Set $set)
    {
        $set->update($request->all());
        return new SetResource($set);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Set $set)
    {
        $set->delete();
        return response()->noContent();
    }
}
