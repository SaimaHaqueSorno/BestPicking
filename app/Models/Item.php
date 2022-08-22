<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Category;

class Item extends Model
{
   
    protected $fillable=['name','category_id','quantity','price','image','details'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}