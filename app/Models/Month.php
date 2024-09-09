<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Month extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'name',
        'abbr_name'
    ];

    public function education_start_month(): HasMany
    {
        return $this->hasMany(Education::class, 'start_month_id');
    }

    public function education_end_month(): HasMany
    {
        return $this->hasMany(Education::class, 'end_month_id');
    }
    
    public function work_experience_start_month(): HasMany
    {
        return $this->hasMany(WorkExperience::class, 'start_month_id');
    }

    public function work_experience_end_month(): HasMany
    {
        return $this->hasMany(WorkExperience::class, 'end_month_id');
    }
}
