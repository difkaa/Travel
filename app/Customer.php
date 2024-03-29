<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'origin', 'destination', 'phone', 'status',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
