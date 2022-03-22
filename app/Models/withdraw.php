<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class withdraw extends Model
{
    use HasFactory;
    public function get_curreny()
    {
        return $this->belongsTo('App\Models\Currency', 'c_id', 'id');
    }
    public function get_user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
