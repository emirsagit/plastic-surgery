<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->hasMany($this, 'language_parent');
    }

    public function children()
    {
        return $this->hasMany($this, 'parent');
    }

    public function parent()
    {
        return $this->hasOne($this, 'id', 'parent');
    }

    public function parentLanguage()
    {
        return $this->hasOne($this, 'id', 'language_parent');
    }
}
