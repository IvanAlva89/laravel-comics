<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * DETAIL PAGE FOR A COMIC ITEM
     */
    public function show($id) {
        //return 'DETAIL PAGE FOR ID: ' . $id; 
        
        $comics = config('comics');
        // dd($comics);

        /**
         * Get specific comic by ID
         */

        //A
        // $comic = [];
        // foreach ($comics as $item) {
        //     if($id == $item['id']) {
        //         $comic = $item;
        //     }
        // }

        //B Collections
        $comic = collect($comics)->firstWhere('id', $id);
        // dd($comic);

        return view('comics.show', compact('comic'));
    }
}
