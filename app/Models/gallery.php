<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    use HasFactory;
    protected $fillable = ['picture','date_uploaded','descript','grouped_date'];
    protected $table = 'gallery';
    public $timestamps = [];
    // protected $dates = ['date','date_uploaded'];
}
