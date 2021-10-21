<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['head_ru','head2_ru','description_ru','head_en','head2_en','description_en','img','img2','category_id'];
    public function Product_vendors()
    {
        return $this->hasMany(ProductVendors::class, 'product_id', 'id');
    }
    public function vendors(){
        return $this->belongsToMany(Vendor::class,'product_vendors');
    }
}
