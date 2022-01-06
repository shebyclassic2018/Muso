<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ministry extends Model
{
    use HasFactory;
    protected $fillable = ['m_name','lship_year'];
    protected $table = 'ministry';
    public $timestamps = [];
}
