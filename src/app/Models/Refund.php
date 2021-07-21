<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'value',
        'requester_name',
        'is_approved',
        'is_denied'
    ];

    public function workflows() {
        return $this->hasOne('App\Models\Workflow');
    }
}
