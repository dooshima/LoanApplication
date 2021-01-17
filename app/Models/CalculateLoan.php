<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalculateLoan extends Model
{
   protected $fillable = [
       'reason','recipient','amount','days'
   ];
}
