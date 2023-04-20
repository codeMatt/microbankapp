<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = ['account_id', 'amount', 'description', 'type', 'date'];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
