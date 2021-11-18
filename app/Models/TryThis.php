<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TryThis extends Model
{
    use HasFactory;

    protected $table = 'try_this';

    // public function try_again(){
    //     retunr $this->hasMany(TryAgain::class);
    // }
    public function servicesTenants(){
        return $this->hasMany(TryAgain::class, 'tenant');
        }
        public function servicesPerson(){
        return $this->hasMany(TryAgain::class, 'service_person');
        }
}
