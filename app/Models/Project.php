<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'thumbnail',
        'url_github',
        'url_website'
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
}
