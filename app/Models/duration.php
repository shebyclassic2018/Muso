<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class duration extends Model
{
    use HasFactory;
    protected $fillable = ['timerange'];
    protected $table = 'duration';
    public $timestamps = [];
}
