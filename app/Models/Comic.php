<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comic extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'link_img', 'pricie', 'sale_date', 'type', 'description'];
}
