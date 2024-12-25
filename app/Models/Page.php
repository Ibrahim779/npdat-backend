<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use IIsmail\FileUpload\Facades\FileUpload;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;

    const FOOTER = 0, HEADER = 1, BOTH = 2;

    const ACTIVE = 1, NOT_ACTIVE = null;

    protected $guarded = ['id'];
    
    public $translatable = ['title', 'body', 'slug'];

    public function setImageAttribute($image)
    {
        if ($image) {
            $this->attributes['image'] = FileUpload::make($image)->store('pages');
        }
    }

    public function getImgAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : asset('dashboard/images/page.svg');
    }

    public function scopeSlug($query, $slug)
    {
        return $query->where("slug->en", 'LIKE', '%' . $slug . '%')
            ->OrWhere("slug->ar", 'LIKE', '%' . $slug . '%');
    }

    public function scopeActive($query)
    {
        $query->whereStatus(self::ACTIVE);
    }

    public static function getPositions()
    {
        return [
            self::FOOTER => trans('main.footer'),
            self::HEADER => trans('main.header'),
            self::BOTH => trans('main.both'),
        ];
    }
}
