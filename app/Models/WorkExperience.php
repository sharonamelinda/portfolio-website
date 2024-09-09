<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'role',
        'company_name',
        'job_description',
        'logo',
        'work_type_id',
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

    public function work_type(): BelongsTo
    {
        return $this->belongsTo(WorkType::class, 'work_type_id');
    }
}
