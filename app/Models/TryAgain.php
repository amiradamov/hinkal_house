<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TryAgain extends Model
{
    use HasFactory;

    protected $table = 'try_agains';

    public function items(){
        return $this->belongsTo(TryThis::class, 'id', 'item_id');
    }

    public function item2_id(){
        return $this->belongsTo(TryThis::class, 'id', 'item2_id');
    }
}
