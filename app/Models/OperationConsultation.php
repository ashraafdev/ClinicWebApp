<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OperationConsultation extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'update_at'];

    public function consultation(): BelongsTo
    {
        return $this->belongsTo(Consultation::class, 'consultationID', 'id');
    }

    public function paymentOrder(): HasOne
    {
        return $this->hasOne(PaiementOrder::class, 'operationID');
    }
}
