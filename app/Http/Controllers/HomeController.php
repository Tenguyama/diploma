<?php

namespace App\Http\Controllers;

use App\Models\Tag\Tag;

class HomeController extends Controller
{
    public function index()
    {
        $tags = Tag::withTranslation()
            ->translatedIn(app()->getLocale())
            ->take(1)
            ->get();
        // dd(App::getLocale());
        //dd($tags->toArray());
        if ($tags->isEmpty()) {
            abort(404);
        }
        return view('home', compact('tags'));
    }

//    public function setEN()
//    {
//        app()->setLocale('en');
//    }
//    public function setUK()
//    {
//        app()->setLocale('uk');
//    }
//    public function setRU()
//    {
//        app()->setLocale('ru');
//    }

}
