<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'club_id', 'created_by', 'created_at', 'updated_at'];

    public function club(){
        return $this->belongsTo(Club::class);
    }
    public function player(){
        return $this->hasMany(players::class);
    }


}
