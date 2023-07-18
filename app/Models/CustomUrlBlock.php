<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomUrlBlock extends Model
{
    protected $fillable = ['url', 'reason', 'user_id', 'status'];
    use HasFactory;
}
