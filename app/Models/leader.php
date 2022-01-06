<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leader extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','sex','email','phone','min_id','f_id','passport','dur_id','pos_id'
    ];
    protected $table = 'leader';
    public $timestamps = [];
}
