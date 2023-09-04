<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Consultation extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'update_at'];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patientID');
    }

    public function paymentOrder(): HasOne
    {
        return $this->hasOne(PaiementOrder::class, 'consultationID');
    }
}
