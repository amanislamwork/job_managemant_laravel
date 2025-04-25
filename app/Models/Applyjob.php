<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Applyjob extends Model
{
    protected $table = 'jobapply';
    
    use HasFactory;

    protected $fillable = [
        'job_id',
        'user_id',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
       
    }

}
