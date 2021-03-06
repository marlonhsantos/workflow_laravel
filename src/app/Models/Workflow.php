<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workflow extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_concluded',
        'is_deleted',
        'refund_id',
        'step_id'
    ];

    public function refund() {
        return $this->belongsTo('App\Models\Refund');
    }

    public function step() {
        return $this->belongsTo('App\Models\Step');
    }
}