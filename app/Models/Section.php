<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Section
 *
 * @property int $id
 * @property int $slider_enable
 * @property int|null $slider_id
 * @property int $about_enable
 * @property string $about_scheme_color
 * @property string $about_menu
 * @property int $skills_enable
 * @property string|null $skills_subtitle
 * @property string|null $skills_title
 * @property string $skills_scheme_color
 * @property string|null $skills_background
 * @property int $testimonial_enable
 * @property int $testimonial_autoplay
 * @property string $testimonial_scheme_color
 * @property string|null $testimonial_background
 * @property int $testimonial_interval
 * @property int $services_enable
 * @property string|null $services_subtitle
 * @property string|null $services_title
 * @property string $services_scheme_color
 * @property string $services_columns
 * @property string|null $services_background
 * @property int $projects_enable
 * @property string|null $projects_subtitle
 * @property string|null $projects_title
 * @property string $projects_scheme_color
 * @property string|null $projects_menu
 * @property string $projects_style
 * @property string|null $projects_background
 * @property int $blog_enable
 * @property string|null $blog_subtitle
 * @property string|null $blog_title
 * @property string $blog_scheme_color
 * @property string|null $blog_menu
 * @property int $blog_columns
 * @property string|null $blog_background
 * @property int $contact_enable
 * @property string|null $contact_subtitle
 * @property string|null $contact_title
 * @property string $contact_scheme_color
 * @property string|null $contact_menu
 * @property string|null $contact_text
 * @property int $map_enable
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Section newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Section newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Section query()
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereAboutEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereAboutMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereAboutSchemeColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereBlogBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereBlogColumns($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereBlogEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereBlogMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereBlogSchemeColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereBlogSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereBlogTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereContactEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereContactMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereContactSchemeColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereContactSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereContactText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereContactTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereMapEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereProjectsBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereProjectsEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereProjectsMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereProjectsSchemeColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereProjectsStyle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereProjectsSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereProjectsTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereServicesBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereServicesColumns($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereServicesEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereServicesSchemeColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereServicesSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereServicesTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereSkillsBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereSkillsEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereSkillsSchemeColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereSkillsSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereSkillsTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereSliderEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereSliderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereTestimonialAutoplay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereTestimonialBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereTestimonialEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereTestimonialInterval($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereTestimonialSchemeColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Section extends Model
{
    use HasFactory;

    protected $table = 'page_section';

    protected $fillable = [
        'slider_enable',
        'slider_id',
        'testimonial_enable',
        'testimonial_scheme_color',
        'testimonial_background',
        'testimonial_autoplay',
        'testimonial_interval',
        'services_enable',
        'services_scheme_color',
        'services_subtitle',
        'services_title',
        'services_columns',
        'services_background',
        'skills_enable',
        'skills_scheme_color',
        'skills_subtitle',
        'skills_title',
        'skills_background',
        'about_enable',
        'about_scheme_color',
        'about_subtitle',
        'about_title',
        'about_menu',
        'projects_enable',
        'projects_scheme_color',
        'projects_subtitle',
        'projects_title',
        'projects_menu',
        'projects_style',
        'projects_background',
        'blog_enable',
        'blog_subtitle',
        'blog_title',
        'blog_scheme_color',
        'blog_menu',
        'blog_columns',
        'blog_background',
        'contact_enable',
        'contact_subtitle',
        'contact_title',
        'contact_scheme_color',
        'contact_menu',
        'contact_text',
        'map_enable',
    ];
}
