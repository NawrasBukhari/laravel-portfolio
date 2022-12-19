<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\WorkCategory
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|WorkCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WorkCategory extends Model
{
    use HasFactory;

    protected $table = 'project_category';

    protected $fillable = [
        'name',
    ];
}
