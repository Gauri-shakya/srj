<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AwardAndAchievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'sort_order',
        'is_active',
    ];
}
