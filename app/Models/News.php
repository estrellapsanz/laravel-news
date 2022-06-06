<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news_laravel';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id,title,autor,publication_date,content,img_path'];

    /**
     * The categories that belong to the new.
     */
    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'news_categories_laravel',
        'id_new','id_category');
    }

    public static  function newsByCategory($id,$page) {
      return  DB::table('news_laravel')
            ->join('news_categories_laravel', 'news_laravel.id', '=', 'news_categories_laravel.id_new')
            ->join('categories_laravel', 'news_categories_laravel.id_category', '=', 'categories_laravel.id')
            ->where('categories_laravel.id', $id)
            ->select('news_laravel.*')
            ->paginate($page);
    }

    public static  function newsById($id) {
        return  DB::table('news_laravel')
            ->join('news_categories_laravel', 'news_laravel.id', '=', 'news_categories_laravel.id_new')
            ->join('categories_laravel', 'news_categories_laravel.id_category', '=', 'categories_laravel.id')
            ->where('news_laravel.id', $id)
            ->select(DB::raw('*'))
            ->get();
    }

}