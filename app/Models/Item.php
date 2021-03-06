<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function item_associations(){
        return $this->hasMany(ItemAssociation::class);
    }
}
