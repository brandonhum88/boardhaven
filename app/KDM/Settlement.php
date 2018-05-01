<?php

namespace App\KDM;

use Illuminate\Database\Eloquent\Model;

class Settlement extends Model
{
    public function setSlugAttribute($value)
    {
        if (static::whereSlug($str = str_slug($value)) -> exists()) {
            $slug = $this -> incrementSlug($slug);
        }

        $this->attributes['slug'] = $slug;
    }

    public function incrementSlug($slug)
    {
        $max = static::whereName($this->name)->latest('id')->value('slug');

        if (is_numeric($max[-1])) {
            preg_replace_callback('/(\d+)$/', function ($matches) {
                return $matches[1] + 1;
            }, $max);
        }

        return "{$slug}-2";
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
