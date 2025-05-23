<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];
    public static $rules = [
        'name' => 'required|string|max:255|unique:Roles,name',
        'slug' => 'required|string|max:255|unique:Roles,slug', 
    ];


}
