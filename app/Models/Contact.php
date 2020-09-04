<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $table = 'contact';
   


    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'title',
        'content',
       
    
    ];

    public $timestamps = false;
   


   protected $casts = [
        'status' => 'boolean',
    ]; 

public function getStatusAttribute($value )
    {
        $status = 'Chưa trả lời';
        if($value == true){
            $status = 'Đã trả lời';
        }

        return $status;
    }
}
