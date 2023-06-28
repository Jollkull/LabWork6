<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stories extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
      'story_text',
      'story_img',
    ];
}
