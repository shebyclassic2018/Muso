<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pos extends Model
{
    use HasFactory;
    protected $fillable = ['pos','lship_year'];
    protected $table = 'pos';
    public $timestamps = [];
}
