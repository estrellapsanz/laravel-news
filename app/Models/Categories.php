<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories_laravel';


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
    protected $fillable = ['id,name'];

    /**
     * The news that belong to the category.
     */
    public function news()
    {
        return $this->belongsToMany(News::class, 'news_categories_laravel','id_category','id_new');
    }


    public static  function newsCategories($id_new) {
        return  DB::table('categories_laravel')
            ->join('news_categories_laravel',  'categories_laravel.id', '=', 'news_categories_laravel.id_category')
            ->where('news_categories_laravel.id_new', $id_new)
            ->select(DB::raw('categories_laravel.name, categories_laravel.id as id_category'))
            ->distinct()->get();
    }

}
