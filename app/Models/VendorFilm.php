<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorFilm extends Model
{
    use HasFactory;
    protected $fillable = ['vendor_id', 'path', 'header_ru','header_en', 'text_ru','text_en'];
    protected $table = 'vendor_films';
}
