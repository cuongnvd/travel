<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class News extends Model
{
   
	protected $table = 'news';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'images',
         'content',
         'sent_date',
         'images1',
         'images2',
         
    ];

    public $timestamps = false;
   

   
}
