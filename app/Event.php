<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    public function scopeIncomplete($query, $val) // Event::incomplete('val');
    {
        return $query->where('completed', 0);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        $this->comments()->create(['body' => $body]);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getArchive()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) count')
                    ->groupBy('year', 'month')
                    ->orderByRaw('min(created_at) desc')
                    ->get()
                    ->toArray();
    }

    public function scopeFilterByDate($query, $filters)
    {
        if (isset($filters['month']) && $month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if (isset($filters['year']) && $year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }
    }
}
