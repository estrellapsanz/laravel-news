<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{

       /**
     * The user repository instance.
     */
    protected $news;

    /**
     * Create a new controller instance.
     *
     *
     * @return void
     */
    public function __construct()
    {
        $this->news =new News;
    }
    /**
     * Show the news or the new for a given id_new.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function news($id=null)
    {

        if (!$id) {
            $news=$this->news->all()->take(5)->toArray();

        }else
        {
            $news[]=$this->news->find(intval($id))->toArray();

        }


        return view('news', ['news' => $news, 'id'=>intval($id)]);
    }
}
