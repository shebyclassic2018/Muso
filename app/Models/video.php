<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
    protected $fillable = ['heading','date_uploaded','link','descript','admin_id'];
    protected $table = 'video';
    public $timestamps = [];
    protected $dates = ['date_uploaded'];
}
