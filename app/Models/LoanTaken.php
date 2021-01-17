<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoanTaken extends Model
{
    protected $fillable= [
        'amount', 'currency','source', 'reason', 'recipient','reference'

    ];
}
