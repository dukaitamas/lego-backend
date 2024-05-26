<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Http\Requests\StoreThemeRequest;
use App\Http\Requests\UpdateThemeRequest;
use App\Http\Resources\ThemeResource;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ThemeResource::collection(Theme::all());
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreThemeRequest $request)
    {
        $theme = Theme::create($request->all());
        return new ThemeResource($theme);
    }

    /**
     * Display the specified resource.
     */
    public function show(Theme $theme)
    {
        return new ThemeResource($theme);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Theme $theme)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateThemeRequest $request, Theme $theme)
    {
        $theme->update($request->all());
        return new ThemeResource($theme);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Theme $theme)
    {
        $theme->delete();
        return response()->noContent();
    }
}
