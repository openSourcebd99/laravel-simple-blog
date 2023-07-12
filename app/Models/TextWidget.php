<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TextWidget extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'image',
        'title',
        'content',
        'active',
    ];

    public static function getTitle(string $key): string
    {
        $cacheKey = 'text_widget_' . $key;
        $expirationInSeconds = 60 * 60 * 24; // 1 day
    
        return Cache::remember($cacheKey, $expirationInSeconds, function () use ($key) {
            $textWidget = self::where('key', $key)->where('active', 1)->first();
            return optional($textWidget)->title ?? '';
        });
    }

    public static function getContent(string $key): string
    {
        $cacheKey = 'text_widget_content' . $key;
        $expirationInSeconds = 60 * 60 * 24; // 1 day
    
        return Cache::remember($cacheKey, $expirationInSeconds, function () use ($key) {
            $textWidget = self::where('key', $key)->where('active', 1)->first();
            return optional($textWidget)->content ?? '';
        });
    }
}