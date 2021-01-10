<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index() {

        //Get comics list
        $comics = config('comics');

        //Gen slugs for comics url (friendly url)

        //How
        //$slug = Str::slug('Ciao classe', '-');
        //dd($slug);

        foreach($comics as $key => $comic) {
            //a titolo -> slug
            $slug = Str::slug($comic['title'], '-');

            //add slug
            $comics[$key]['slug'] = $slug;
        }
        //dd($comics);

        return view('home', compact('comics'));
    }
}
