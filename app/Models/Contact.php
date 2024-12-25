<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function getTrimAttribute()
    {
        return Str::limit(strip_tags($this->message), 50, $end = '...');
    }
}
