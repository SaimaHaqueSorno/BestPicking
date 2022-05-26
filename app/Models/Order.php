<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded=[];
    // protected $fillable=['user_id','receiver_first_name','receiver_last_name','receiver_email','receiver_address','total','payment_status','tran_id'];
    
    public function details()
    {
        return $this->hasMany(OrderDetails::class);
    }
   
    public static function orderNumber()
    {
        $serial = (self::latest()->first()->id ?? 0) + 1;
        return "ODR" . date('ymd') . $serial;
    }
}

