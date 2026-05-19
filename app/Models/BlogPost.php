<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','slug','excerpt','content','featured_image',
        'meta_title','meta_description','meta_keywords','og_image',
        'published_at','status',
    ];

    protected $casts = [
        'status'       => 'boolean',
        'published_at' => 'datetime',
    ];

    public function getRouteKeyName(): string { return 'slug'; }

    public function scopeActive($query) { return $query->where('status', true); }

    public function scopePublished($query)
    {
        return $query->where('status', true)
                     ->whereNotNull('published_at')
                     ->where('published_at', '<=', now());
    }

    public function getImageUrlAttribute(): string
    {
        if ($this->featured_image && Storage::disk('public')->exists($this->featured_image)) {
        return Storage::url($this->featured_image);
    }
        return asset('assets/images/about-us.jpg');
    }

    public function getReadTimeAttribute(): string
    {
        $words = str_word_count(strip_tags($this->content ?? ''));
        $minutes = max(1, ceil($words / 200));
        return $minutes . ' min read';
    }
}