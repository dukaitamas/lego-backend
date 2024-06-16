<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Set;
use App\Models\Theme;
use App\Http\Resources\SetResource;
use App\Http\Resources\ThemeResource;


class SearchController extends Controller
{
    public function search(Request $request)
    // {
    //     $query = $request->input('query');
    //     $sets = Set::where('name', 'like', '%' . $query . '%')->get();
    //     $themes = Theme::where('name', 'like', '%' . $query . '%')->get();
    //     $results = $sets->merge($themes);
    //     return SetResource::collection($results);
    // }

    {
        $query = $request->input('query');
        $sets = Set::where('setName', 'LIKE', "%{$query}%")->paginate(12);
        $themes = Theme::where('name', 'LIKE', "%{$query}%")->paginate(12);

        return response()->json([
            // 'sets' => SetResource::collection($sets),
            // 'themes' => ThemeResource::collection($themes),
            'sets' => $sets,
            'themes' => $themes,
        ]);
    }

}

