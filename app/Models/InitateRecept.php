<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InitateRecept extends Model
{
    protected $fillable = [
        'account_name','account_number','bank_id','currency','recipient_code','bank_code','bank_name'
    ];
}
