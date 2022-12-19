<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\WorkGallery
 *
 * @property int $id
 * @property string $image
 * @property int $project_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|WorkGallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkGallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkGallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkGallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkGallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkGallery whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkGallery whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkGallery whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WorkGallery extends Model
{
    use HasFactory;

    protected $table = 'project_gallery';

    protected $fillable = [
        'image',
        'project_id',
    ];
}
