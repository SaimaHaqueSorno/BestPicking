<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded=[];
    // protected $fillable=['user_id','receiver_first_name','receiver_last_name','receiver_email','receiver_address','total','payment_method'];
}
