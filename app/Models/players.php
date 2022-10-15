<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class players extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'team_id', 'created_by', 'created_at', 'updated_at'];

    public function team(){
        return $this->belongsTo(Team::class);
    }
}
