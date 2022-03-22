<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfitHistory extends Model
{
    use HasFactory;

    public function get_user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
