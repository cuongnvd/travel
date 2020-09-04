<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class CategoryTour extends Model
{
   
	protected $table = 'tours_schedule';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_of_tour',
        'cost',
         'the_start_day',
         'the_end_day',
         'day_of_number',
         'number_of_night',
         'seats_of_number',
         'content',
         'images',
         'images1',
         'images2',
         'types_of_tour_id',
         'type_in_out',
         'specialtour',
         'note',
         'place_of_departure',
    
    ];

    public $timestamps = false;
   
    //định dạng tiền
    public function getCostAttribute($value )
    {
        return number_format("$value",0,",",".");
    }


    public function scopeGetTourByDate($query)
    {
        $now = now()->toDateTimeString();
        return $query->where([['seats_of_number', '>', 0], ['seats_of_number', '<=', $now]]);
    }
   
   
}
