<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
      'tour_name',
      'tour_price',
      'tour_text',
      'tour_img',
    ];
}
