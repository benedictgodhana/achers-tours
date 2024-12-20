<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'name',
        'email',
        'subject',
        'package_details',
        'phone',
    ];

    /**
     * Get the package associated with the inquiry.
     */
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
