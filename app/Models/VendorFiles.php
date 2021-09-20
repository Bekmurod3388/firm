<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorFiles extends Model
{
    use HasFactory;

    protected $fillable = ['vendor_id', 'path','file_name'];
    protected $table = 'vendor_files';

}
