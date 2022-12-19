<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Slider
 *
 * @property int $id
 * @property string $type
 * @property string|null $video
 * @property string|null $video_type
 * @property string|null $image_video
 * @property string $color_scheme
 * @property int $text_rotator
 * @property string $text
 * @property int|null $text_rotator_interval
 * @property int $overlay_color
 * @property string|null $overlay_type
 * @property string|null $color_1
 * @property string|null $color_2
 * @property string|null $gradient_type
 * @property string|null $animation_in
 * @property string|null $animation_out
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider query()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereAnimationIn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereAnimationOut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereColor1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereColor2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereColorScheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereGradientType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereImageVideo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereOverlayColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereOverlayType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereTextRotator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereTextRotatorInterval($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereVideo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereVideoType($value)
 * @mixin \Eloquent
 */
class Slider extends Model
{
    use HasFactory;

    protected $table = 'slider';

    protected $fillable = [
        'type',
        'video',
        'video_type',
        'image_video',
        'color_scheme',
        'text_rotator',
        'text',
        'text_rotator_interval',
        'overlay_color',
        'overlay_type',
        'color_1',
        'color_2',
        'gradient_type',
        'animation_in',
        'animation_out',
    ];
}
