<?php

namespace App\Models;

use IIsmail\FileUpload\Facades\FileUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Partner extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = ['id'];
    
    public $translatable = ['name'];

    public function setImageAttribute($image)
    {
        if ($image) {
            $this->attributes['image'] = FileUpload::make($image)->store('partners');
        }
    }
    public function getImgAttribute()
    {
        return $this->image ? asset('storage/'. $this->image) : asset('assets/images/LBI LOGO (1).svg');
    }
}
