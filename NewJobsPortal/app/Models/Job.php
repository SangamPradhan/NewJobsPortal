<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'location',
        'company',
        'category_id',
        'type',
        'deadline',
        'salary',
        'benefits',
        'qualification',
        'vacancy',
        'keyword',
        'photo',
    ];

    protected $casts = [
        'deadline' => 'datetime',
    ];

    function category()
    {
        return $this->belongsTo(Category::class);
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function applications()
    {
        return $this->hasMany(Application::class);
    }


}
