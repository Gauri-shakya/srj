<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeFaq extends Model
{
    protected $fillable = [
        'question',
        'answer',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
