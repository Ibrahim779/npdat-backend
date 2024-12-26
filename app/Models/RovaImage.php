<?php

namespace App\Models;

use IIsmail\FileUpload\Facades\FileUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RovaImage extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function setImageAttribute($image)
    {
        if ($image) {
            $this->attributes['image'] = FileUpload::make($image)->store('rova-images');
        }
    }
    public function getImgAttribute()
    {
        return $this->image ? asset('storage/'. $this->image) : asset('assets/images/LBI LOGO (1).svg');
    }
}
