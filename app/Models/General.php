<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\General
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string|null $analytics_code
 * @property string $social_links
 * @property string $image_favicon
 * @property string $image_logo_header_dark
 * @property string $image_logo_header_light
 * @property string $menu_position
 * @property int $loader
 * @property string $image_logo_loader
 * @property string $loader_scheme_color
 * @property int $cookies_enable
 * @property string $cookies_style
 * @property string $cookies_color
 * @property string $cookies_alignment
 * @property string|null $cookies_title
 * @property string $cookies_text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|General newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|General newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|General query()
 * @method static \Illuminate\Database\Eloquent\Builder|General whereAnalyticsCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereCookiesAlignment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereCookiesColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereCookiesEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereCookiesStyle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereCookiesText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereCookiesTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereImageFavicon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereImageLogoHeaderDark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereImageLogoHeaderLight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereImageLogoLoader($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereLoader($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereLoaderSchemeColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereMenuPosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereSocialLinks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class General extends Model
{
    use HasFactory;

    protected $table = 'page_setting';

    protected $fillable = [
        'title',
        'description',
        'keywords',
        'analytics_code',
        'social_links',
        'image_favicon',
        'image_logo_header_dark',
        'image_logo_header_light',
        'menu_position',
        'loader',
        'image_logo_loader',
        'loader_scheme_color',
        'cookies_enable',
        'cookies_style',
        'cookies_color',
        'cookies_alignment',
        'cookies_title',
        'cookies_text',
    ];
}
