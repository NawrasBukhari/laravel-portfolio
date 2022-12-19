<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Footer
 *
 * @property int $id
 * @property int $columns
 * @property string|null $column_1_title
 * @property string|null $column_1_subtitle
 * @property string|null $column_1_content
 * @property int $column_1_social
 * @property string|null $column_2_title
 * @property string|null $column_2_subtitle
 * @property string|null $column_2_content
 * @property int $column_2_social
 * @property string|null $column_3_title
 * @property string|null $column_3_subtitle
 * @property string|null $column_3_content
 * @property int $column_3_social
 * @property string|null $column_4_title
 * @property string|null $column_4_subtitle
 * @property string|null $column_4_content
 * @property int $column_4_social
 * @property string|null $copyright
 * @property int $top_button
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Footer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Footer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Footer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereColumn1Content($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereColumn1Social($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereColumn1Subtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereColumn1Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereColumn2Content($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereColumn2Social($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereColumn2Subtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereColumn2Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereColumn3Content($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereColumn3Social($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereColumn3Subtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereColumn3Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereColumn4Content($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereColumn4Social($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereColumn4Subtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereColumn4Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereColumns($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereCopyright($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereTopButton($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Footer extends Model
{
    use HasFactory;

    protected $table = 'page_footer';

    protected $fillable = [
        'columns',
        'column_1_title',
        'column_1_subtitle',
        'column_1_content',
        'column_1_social',
        'column_2_title',
        'column_2_subtitle',
        'column_2_content',
        'column_2_social',
        'column_3_title',
        'column_3_subtitle',
        'column_3_content',
        'column_3_social',
        'column_4_title',
        'column_4_subtitle',
        'column_4_content',
        'column_4_social',
        'copyright',
        'top_button',
    ];
}
