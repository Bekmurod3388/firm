<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read VendorFiles|null $vendorFiles
 */
class Vendor extends Model
{
    use HasFactory;

    protected $fillable = ['img', 'text_ru','text_en', 'files', 'links','category_id','back','name','url'];

    public function vendorFiles()
    {
        return $this->hasMany(VendorFiles::class, 'vendor_id', 'id');
    }
    public function vendorFilms()
    {
        return $this->hasMany(Vendorfilm::class, 'vendor_id', 'id');
    }
    public function products(){
        return $this->belongsToMany(Product::class, 'product_vendors');
    }
}
