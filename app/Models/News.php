<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsToMany(Categories::class, 'news_categories_laravel','id_new','id_category');
    }

}
