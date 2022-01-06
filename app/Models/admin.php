<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $fillable = ['name','date_created','password','phone','email'];
    protected $table = 'admin';
    public $timestamps = [];
    protected $dates = ['date_created'];
}
