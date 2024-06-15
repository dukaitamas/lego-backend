<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSetRequest;
use App\Http\Requests\UpdateSetRequest;
use App\Http\Resources\SetResource;
use App\Models\Set;
use Hamcrest\Core\Set as CoreSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Collection\Set as CollectionSet;

class SetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */

    // public function index(Request $request)
    // {
    //     $perPage = $request->input('per_page', 10); // Default per page is 10
    //     $sets = Set::paginate($perPage);
    //     return SetResource::collection($sets);


    public function index()
    {

        return SetResource::collection(Set::all());

        // $sets = DB :: table ( ' sets ' ) -> simplePaginate ( 15 );
        // return SetResource::collection($sets);



        // Létrehozzuk a query-t, majd pagináljuk azt
    // $sets = Set::query()->paginate(10);
    // return SetResource::collection($sets);

        // $sets = Set::paginate(12);
        // return SetResource::collection($sets);


        // $sets  = Set::where(column: 'number', operator: '>', value: 100)
        //     ->orderBy(column: 'number', direction: 'DESC')
        //     ->paginate(perPage: 12);

        // return view ('home.index', [
        //     'sets' => $sets,
        // ]);



        // $sets = Set::paginate(11); // Ez lekéri az összes bejegyzést, oldalak szerint
        // return SetResource::collection($sets);

        // $posts = Set::paginate(13); // Ez lekéri az összes bejegyzést, oldalak szerint
        // return response()->json($posts);
        // return response()->json(SetResource::collection($posts));
        // return SetResource::collection(Set::all($posts));
        // return SetResource::collection(Set::paginate(13));

    }

    // public function index(Request $request)
    // {
    //     $data = Set::paginate(10); // 10 az oldalankénti rekordok száma

    //     return view('your_view', ['data' => $data]);
    // }


    // public function index(Request $request)
    // {
    //     $perPage = $request->input('per_page', 10); // Alapértelmezett oldalméret: 10
    //     $sets = Set::paginate($perPage);
    //     return SetResource::collection($sets);
    // }







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
