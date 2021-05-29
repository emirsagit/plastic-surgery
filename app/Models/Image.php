<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'alt', 'path'
    ];

    public function services()
    {
        return $this->morphedByMany(Service::class, 'imageable');
    }

    public function delete_file()
    {
        if (File::exists(public_path($this->path))) {
            File::delete(public_path($this->path));
        }
    }
}
