<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Style
 *
 * @property int $id
 * @property string $light_head_color
 * @property string $light_main_color
 * @property string $light_accent_color
 * @property string $light_accent_hover_color
 * @property string $light_back_main_color
 * @property string $light_back_secondary_color
 * @property string $dark_head_color
 * @property string $dark_main_color
 * @property string $dark_accent_color
 * @property string $dark_accent_hover_color
 * @property string $dark_back_main_color
 * @property string $dark_back_secondary_color
 * @property string $font_head
 * @property string $font_main
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Style newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Style newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Style query()
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereDarkAccentColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereDarkAccentHoverColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereDarkBackMainColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereDarkBackSecondaryColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereDarkHeadColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereDarkMainColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereFontHead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereFontMain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereLightAccentColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereLightAccentHoverColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereLightBackMainColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereLightBackSecondaryColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereLightHeadColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereLightMainColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Style whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Style extends Model
{
    use HasFactory;

    protected $table = 'page_style';

    protected $fillable = [
        'light_head_color',
        'light_main_color',
        'light_accent_color',
        'light_accent_hover_color',
        'light_back_main_color',
        'light_back_secondary_color',
        'dark_head_color',
        'dark_main_color',
        'dark_accent_color',
        'dark_accent_hover_color',
        'dark_back_main_color',
        'dark_back_secondary_color',
        'font_head',
        'font_main',
    ];
}
