<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\models\Product;
use App\models\Item;

class Category extends Model
{
    
    protected $guarded=[];
     
    public function item()
    {
        return $this->hasMany(Item::class, 'category_id','id');
    }
     
    public function product()
    {
        return $this->hasMany(Product::class, 'category_id','id');
    }
}
