<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privacy extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getBodyAttribute()
    {
        return $this->{'body_' . app()->getLocale()};
    }
}
