<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientAssistance extends Model
{
    use HasFactory;

    protected $primaryKey = 'client_assistance_id';

    protected $fillable = [
        'client_id',
        'assistance_type_id',
        'source_of_fund',
        'date_received_request',
        'status',
        'date_status_changed',
        'payee_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function assistanceType()
    {
        return $this->belongsTo(AssistanceType::class);
    }

    public function payee()
    {
        return $this->belongsTo(Payee::class);
    }
}