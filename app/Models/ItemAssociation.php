<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemAssociation extends Model
{
    use HasFactory;

    protected $table = 'item_associations';

    public function items(){
        return $this->belongsTo('App\Models\Item','item_id');
    }

    public function item2_id(){
        return $this->belongsTo('App\Models\Item','item2_id', 'item_id');
    }
}
