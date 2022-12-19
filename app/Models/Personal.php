<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Personal
 *
 * @property int $id
 * @property string|null $image
 * @property string $title
 * @property string $description
 * @property int $cv_enable
 * @property string $cv_text
 * @property string|null $cv_file
 * @property string $info
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Personal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Personal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Personal query()
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereCvEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereCvFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereCvText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Personal extends Model
{
    use HasFactory;

    protected $table = 'personal_info';

    protected $fillable = [
        'image',
        'title',
        'description',
        'cv_enable',
        'cv_text',
        'cv_file',
        'info',
    ];
}
