<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title', 'link_img', 'pricie', 'sale_date', 'type', 'description'];
}
