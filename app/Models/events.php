<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;
    protected $fillable = ['body','date_uploaded'];
    protected $table = 'events';
    public $timestamps = [];
    protected $dates = ['date_uploaded'];
}
