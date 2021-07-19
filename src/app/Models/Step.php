<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;

    protected $fillable = [
        'step_name',
        'previous_step_id',
        'end'
    ];

    public function workflows() {
        return $this->hasMany('App\Models\Workflow');
    }
}
