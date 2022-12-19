<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Blog
 *
 * @property int $id
 * @property string $title
 * @property string|null $short_desc
 * @property string $text
 * @property string $type
 * @property string|null $image
 * @property string|null $video
 * @property string|null $quote_text
 * @property string|null $quote_author
 * @property string $author
 * @property string $slug
 * @property string $status
 * @property string $images_code
 * @property int $order
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereImagesCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereQuoteAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereQuoteText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereShortDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereVideo($value)
 * @mixin \Eloquent
 */
class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';

    protected $fillable = [
        'title',
        'short_desc',
        'text',
        'type',
        'image',
        'video',
        'quote_text',
        'quote_author',
        'author',
        'slug',
        'status',
        'images_code',
        'order',
        'category_id',
    ];
}
