<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'title', 'slug', 'video', 'image', 'alt', 'excerpt', 'body', 'language', 'seo_title', 'seo_description', 'language_parent', 'parent'
    ];

    public function path()
    {
        return '/' . $this->slug;
    }

    // Aşağıdaki ilişkiler sayesinde alternate language taglarını dinamik olarak ekledim.
    public function childrenLanguages()
    {
        return $this->hasMany($this, 'language_parent', 'id');
    }

    public function children()
    {
        return $this->hasMany($this, 'parent');
    }

    public function parentService()
    {
        return $this->belongsTo($this, 'parent', 'id');
    }

    public function parentLanguage()
    {
        return $this->belongsTo($this, 'language_parent', 'id');
    }

    public function images()
    {
        return $this->morphToMany(Image::class, 'imageable');
    }

    public function isParent()
    {
        return ($this->parentService ? false : true);
    }

    public function getImages()
    {
        if (!count($this->images) && $this->parentService) {
            return $this->parentService->images()->latest()->take(3)->get();
        }
        return $this->images()->latest()->take(3)->get();
    }
}
