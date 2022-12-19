<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Map
 *
 * @property int $id
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $zoom
 * @property string|null $map_style
 * @property string|null $map_key
 * @property string|null $map_text
 * @property string|null $icon_image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Map newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Map newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Map query()
 * @method static \Illuminate\Database\Eloquent\Builder|Map whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Map whereIconImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Map whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Map whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Map whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Map whereMapKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Map whereMapStyle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Map whereMapText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Map whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Map whereZoom($value)
 * @mixin \Eloquent
 */
class Map extends Model
{
    use HasFactory;

    protected $table = 'page_map';

    protected $fillable = [
        'latitude',
        'longitude',
        'zoom',
        'map_style',
        'map_key',
        'map_text',
        'icon_image',
    ];
}
