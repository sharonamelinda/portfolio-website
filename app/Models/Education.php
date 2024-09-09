<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Education extends Model
{
    use HasFactory;

    protected $table = 'educations';
    protected $fillable = 
    [
        'degree',
        'major',
        'institution_name',
        'grade',
        'logo',
        'start_year',
        'end_year',
        'start_month_id',
        'end_month_id'
    ];

    public function start_month(): BelongsTo
    {
        return $this->belongsTo(Month::class, 'start_month_id');
    }

    public function end_month(): BelongsTo
    {
        return $this->belongsTo(Month::class, 'end_month_id');
    }
}
