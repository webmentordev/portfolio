<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'company',
        'location',
        'type',
        'started_at',
        'end_at',
        'order',
    ];
}