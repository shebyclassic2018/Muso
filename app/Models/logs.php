<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logs extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','table_visited','action','action_date','item_id'
    ];
    protected $table = "logs";
    public $timestamps = [];
}
