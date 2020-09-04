<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_Tours extends Model
{
    protected $table = 'order_tours';
   


    protected $fillable = [
        'names',
        'phone_number',
        'address',
        'email',
        'seats_of_number',
        'tours_id',
        'name_of_tour',
        'payments',

    
    ];

    public $timestamps = false;
   


   protected $casts = [
        'status' => 'boolean',
        'payments' => 'boolean'
    ]; 

public function getStatusAttribute($value )
    {
        $status = 'Chưa xác nhận';
        if($value == true){
            $status = 'Đã xác nhận';
        }

        return $status;
    }
    public function getPaymentsAttribute($value )
    {
        $payments = 'Tiền mặt';
        if($value == true){
            $payments  = 'Chuyển khoản';
        }

        return $payments ;
    }
   

}
