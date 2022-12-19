<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Experience
 *
 * @property int $id
 * @property string $type
 * @property string $period
 * @property string $title
 * @property string $description
 * @property int $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Experience newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Experience newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Experience query()
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience wherePeriod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Experience extends Model
{
    use HasFactory;

    protected $table = 'experience';

    protected $fillable = [
        'type',
        'period',
        'title',
        'description',
        'order',
    ];
}
