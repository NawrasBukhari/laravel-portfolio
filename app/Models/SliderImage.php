<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SliderImage
 *
 * @property int $id
 * @property string $image
 * @property int $slider_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SliderImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SliderImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SliderImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|SliderImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderImage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderImage whereSliderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderImage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SliderImage extends Model
{
    use HasFactory;

    protected $table = 'slider_image';

    protected $fillable = [
        'image',
        'slider_id',
    ];
}
