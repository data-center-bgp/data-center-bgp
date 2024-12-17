<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Permission\Traits\HasRoles;

class EstimationCycleTimeCoa extends Model
{
    use HasFactory, HasRoles;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'estimasi' => 'integer',
    ];

    public function setEstimasiAttribute($value)
    {
        if (is_string($value) && strpos($value, ':') !== false) {
            [$hours, $minutes] = explode(':', $value);
            $this->attributes['estimasi'] = ((int) $hours) * 60 + (int) $minutes;
        } else {
            $this->attributes['estimasi'] = $value; // Fallback for integers
        }
    }

    public function getEstimasiAttribute($value)
    {
        if (is_numeric($value)) {
            $hours = floor($value / 60);
            $minutes = $value % 60;

            return sprintf('%02d:%02d', $hours, $minutes);
        }

        return $value;
    }
}
