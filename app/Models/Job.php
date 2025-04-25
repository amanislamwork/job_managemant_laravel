<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'jobtitle',
        'jobdescription',
        'joblocation',
        'experience',
        'jobtype',
        'salary',
        'skillset',
        'companyname'
    ];

    public static $rules = [
        'jobtitle' => 'required|string|max:255',
        'jobdescription' => 'required|string|max:255',
        'joblocation' => 'required|string|max:255',
        'experience' => 'required|string|max:255',
        'jobtype' => 'required|string|max:255',
        'salary' => 'required|string|max:255',
        'companyname' => 'required|string|max:255',
    ];
}
