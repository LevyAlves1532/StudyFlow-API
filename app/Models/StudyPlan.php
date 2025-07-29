<?php

namespace App\Models;

use App\Enums\DayOfWeekStudyPlanEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudyPlan extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'day_of_week',
        'start_time',
        'end_time',
        'subject',
    ];

    protected $casts = [
        'day_of_week' => DayOfWeekStudyPlanEnum::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
