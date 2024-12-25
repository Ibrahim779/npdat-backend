<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory, HasTranslations;

    const CATEGORIES = ['global', 'investor', 'company'];
    const TRANS_FIELDS = ['question', 'answer'];

    protected $guarded = ['id'];

    public $translatable = self::TRANS_FIELDS;

    public function getTrimQuestion()
    {
        return Str::limit(strip_tags($this->question), 30, $end = ' ... ');
    }

    public function getTrimAnswer()
    {
        return Str::limit(strip_tags($this->answer), 120, $end = ' ... ');
    }
}
