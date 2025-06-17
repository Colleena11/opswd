<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssistanceType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_name',
        // Add other fields as needed
    ];

    public function assistanceCategories()
    {
        return $this->hasMany(AssistanceCategory::class);
    }

    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }
}