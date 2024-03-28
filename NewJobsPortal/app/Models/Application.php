<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'applicant_name',
        'job_id',
        'job_title',
        'status',
        'cover_letter',
        'attachment'
    ];

    function user(){
        return $this->belongsTo(User::class);
    }

    function job(){
        return $this->belongsTo(Job::class);
    }

    public function scopeByUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }
}
