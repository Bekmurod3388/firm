<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['header_ru','header2_ru','description_ru','header_uz','header2_uz','description_uz','header_en','header2_en','description_en','img','viewed'];
}
