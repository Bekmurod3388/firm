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

    protected $fillable = ['img', 'text', 'files', 'links','category_id'];

    public function vendorFiles()
    {
        return $this->hasMany(VendorFiles::class, 'vendor_id', 'id');
    }
}
