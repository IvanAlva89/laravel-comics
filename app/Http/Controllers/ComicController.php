<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * DETAIL PAGE FOR A COMIC ITEM
     */
    public function show($slug) {
        
        $comics = config('comics');
        // dd($comics);

        /**
         * Get specific comic by slug
         */

        //A
        $comic = [];
        foreach ($comics as $item) {
            // title -> slug
            $titleConverted = Str::slug($item['title'], '-');

            // decisione
            if($slug == $titleConverted) {
                $comic = $item;
                break;
            }
        }

        // Check comic
        if(empty($comic)) {
            abort(404);
        }

        /**
         * Get specific comic by ID
         */


        // B Collections
        // $comic = collect($comics)->firstWhere('id', $id);
        // dd($comic);

        return view('comics.show', compact('comic'));
    }
}
