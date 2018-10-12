<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelter extends Model
{
    protected $fillable = [
        'user_id', 'name', 'address1',
    ];

    public function Users()
    {
        return $this->belongsTo('App\People');
    }
}
