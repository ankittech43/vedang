<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'created_by', 'created_at', 'updated_at'];

    public function teams(){
        return $this->hasMany(Team::class,'club_id');
    }
}
