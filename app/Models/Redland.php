<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redland extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'redland';
    protected $fillable = ['updated_at'];
}
