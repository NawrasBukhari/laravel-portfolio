<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Skill
 *
 * @property int $id
 * @property string $type
 * @property string $title
 * @property int $percentage
 * @property int $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Skill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill query()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill wherePercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Skill extends Model
{
    use HasFactory;

    protected $table = 'skill';

    protected $fillable = [
        'type',
        'title',
        'percentage',
        'order',
    ];
}
