<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comic extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'link_img', 'pricie', 'sale_date', 'type', 'description'];

    // ----GETTER-----
    public function getCreatedAt()
    {
        return Carbon::create($this->created_at)->format('d-m-Y');
    }

    public function getUpdatedAt()
    {
        return Carbon::create($this->updated_at)->format('d-m-Y');
    }

    public function getDeletedAt()
    {
        return Carbon::create($this->deleted_at)->format('d-m-Y');
    }
}
