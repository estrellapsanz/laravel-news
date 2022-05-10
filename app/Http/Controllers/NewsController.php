<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Http\Resources\NewsResource;

class NewsController extends Controller
{

    /**
     * Show the news or the new for a given id_new.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function news($id=null)
    {

        if (!$id)
            $news=News::all()->take(5)->toArray();
        else
            $news[]=News::find(intval($id))->toArray();

        return view('news', ['news' => $news, 'id'=>intval($id)]);
    }

   /* public function index()
    {
        $news = News::all();
        return NewsResource::collection($news);
    }*/
}
