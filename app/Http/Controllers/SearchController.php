<?php

namespace App\Http\Controllers;

use App\Models\Weapons; // Replace with your actual model
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Perform search
        $results = Weapons::query()
            ->where('weapon_name', 'LIKE', "%{$query}%")
            ->get();

        // Return view with search results
        return view('search_results', compact('results', 'query'));
    }
}
