<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Term extends Model
{
    use HasFactory;
    use  HasTranslations;

    protected $guarded = ['id'];

    public $translatable = ['title', 'body'];

    public function trim()
    {
        return Str::limit(strip_tags($this->body), 100, $end = '...');
    }
}
