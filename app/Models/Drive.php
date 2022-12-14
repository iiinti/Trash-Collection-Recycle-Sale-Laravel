<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drive extends Model
{
    protected $fillable = [
        'drive_type', 'drive_number', 'date', 'sources_destination',
    ];

    use HasFactory;
}
