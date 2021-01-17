<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccumulatedLoan extends Model
{
    protected $fillable = [
        'percentage','amount','amounttobepaid'
    ];
}
