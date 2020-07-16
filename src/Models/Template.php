<?php namespace Hapiwork\Freshdesk\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model {

    public function scopeGlobal($query)
    {
        return $query->where('is_global', true);
    }

    public function user() {
        return $this->belongsTo(\App\Model\User::class);
    }
}

