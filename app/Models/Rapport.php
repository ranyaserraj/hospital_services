<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rapports';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'hospitalization_start',
        'hospitalization_end',
        'reason',
        'history',
        'operation_date',
        'intervention_title',
        'progress',
        'discharge_decision',
        'discharge_date',
        'rehabilitation',
        'treatment',
        'follow_up_date',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'hospitalization_start' => 'date',
        'hospitalization_end' => 'date',
        'operation_date' => 'date',
        'discharge_date' => 'date',
        'follow_up_date' => 'date',
    ];

    /**
     * Get the patient that owns the rapport.
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'user_id', 'id_p');
    }
}
