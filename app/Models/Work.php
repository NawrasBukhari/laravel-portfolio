<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Work
 *
 * @property int $id
 * @property int $enable
 * @property string $title
 * @property string $type
 * @property string $short_desc
 * @property string $images_code
 * @property string $description
 * @property string|null $image
 * @property string|null $image_more_1
 * @property string|null $image_more_2
 * @property string|null $video
 * @property string $info
 * @property int $order
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Work newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Work newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Work query()
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereImageMore1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereImageMore2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereImagesCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereShortDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereVideo($value)
 * @mixin \Eloquent
 */
class Work extends Model
{
    use HasFactory;

    protected $table = 'project';

    protected $fillable = [
        'enable',
        'title',
        'type',
        'short_desc',
        'images_code',
        'description',
        'image',
        'image_more_1',
        'image_more_2',
        'video',
        'info',
        'order',
        'category_id',
    ];
}
