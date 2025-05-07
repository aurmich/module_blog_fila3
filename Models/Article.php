<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Modules\Lang\Models\Contracts\HasTranslationsContract;
use Modules\Rating\Models\Contracts\HasRatingContract;
use Modules\Rating\Models\Rating;
use Modules\Rating\Models\Traits\HasRating;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
use Parental\HasChildren;
use Safe\DateTime;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use Spatie\Tags\HasTags;
use Spatie\Translatable\HasTranslations;
use Webmozart\Assert\Assert;

class Article extends BaseModel implements Feedable, HasRatingContract, HasTranslationsContract
{
    use HasRating;
    use HasTags;
    use HasTranslations;
    use HasChildren;

    /** @var array<int, string> */
    public $translatable = [
        'title',
        'content_blocks',
        'sidebar_blocks',
        'footer_blocks',
    ];

    /**
     * Ottiene la traduzione di un attributo in una specifica lingua.
     *
     * @param string $key Il nome dell'attributo da tradurre
     * @param string $locale Il codice della lingua richiesta
     * @param bool $useFallbackLocale Se utilizzare o meno la lingua di fallback
     * 
     * @return array|string|int|null Il valore tradotto dell'attributo
     */
    public function getTranslation(string $key, string $locale, bool $useFallbackLocale = true): array|string|int|null
    {
        if (! $this->isTranslatableAttribute($key)) {
            return $this->getAttribute($key);
        }

        $translations = $this->getTranslations($key);

        $translation = $translations[$locale] ?? '';

        if ($translation !== '' || ! $useFallbackLocale) {
            $value = $translation;
        } else {
            $value = $translations[config('app.fallback_locale')] ?? '';
        }

        return match(true) {
            is_string($value) => $value,
            is_array($value) => $value,
            is_int($value) => $value,
            default => null,
        };
    }

    protected $fillable = [
        'uuid',
        'user_id',
        'title',
        'slug',
        'body',
        'images',
        'viewCount',
        'content_blocks',
        'footer_blocks',
        'sidebar_blocks',
        'is_featured',
        'main_image_upload',
        'main_image_url',
        'published_at',
        'closed_at',
        'category_id',
        'type',
        'status',
        'status_display',
        'bet_end_date',
        'event_start_date',
        'event_end_date',
        'is_wagerable',
        'brier_score',
        'brier_score_play_money',
        'brier_score_real_money',
        'wagers_count',
        'wagers_count_canonical',
        'wagers_count_total',
        'wagers',
        'volume_play_money',
        'volume_real_money',
        'is_following',
        'rewarded_at',
    ];

    /**
     * @return \Illuminate\Support\Collection<int, Article>
     */
    public static function getAllFeedItems()
    {
        return self::latest()->take(150)->get();
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function user(): BelongsTo
    {
        $user_class = XotData::make()->getUserClass();

        return $this->belongsTo($user_class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function toFeedItem(): FeedItem
    {
        Assert::notNull($this->user, '['.__LINE__.']['.__FILE__.']');

        return FeedItem::create()
            ->id($this->slug)
            ->title($this->title)
            ->summary($this->description)
            ->updated($this->updated_at)
            ->authorName($this->user->name ?? 'Unknown');
    }

    public function shortBody(int $words = 30): string
    {
        return Str::words(strip_tags((string) $this->body), $words);
    }

    public function getFormattedDate(): string
    {
        Assert::notNull($this->published_at, '['.__LINE__.']['.__FILE__.']');

        return $this->published_at->format('F jS Y');
    }

    public function getThumbnail(): ?string
    {
        if (null !== $this->getMedia()->first()) {
            return $this->getMedia()->first()->getUrl();
        }

        return '#';
    }

    public function humanReadTime(): Attribute
    {
        return new Attribute(
            get: static function ($value, array $attributes): string {
                $words = Str::wordCount(strip_tags((string) $attributes['body']));
                $minutes = ceil($words / 200);

                return $minutes.' '.str('min')->plural((int) $minutes).', '
                    .$words.' '.str('word')->plural($words);
            }
        );
    }

    /**
     * Scope a query to only include articles different from current article.
     */
    public function scopeDifferentFromCurrentArticle(EloquentBuilder $query, string $current_article): EloquentBuilder
    {
        return $query->where('id', '!=', $current_article);
    }

    /**
     * The author that belong to the article.
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(Profile::class, 'user_id');
    }

    /**
     * Get the article's main image.
     */
    protected function mainImage(): Attribute
    {
        return new Attribute(
            get: static function ($value, $attributes): string {
                return $attributes['main_image_upload'] ?? $attributes['main_image_url'] ?? '#';
            }
        );
    }

    public function getTitle(): string
    {
        if ($this->title) {
            return $this->title;
        }

        return 'Get Title of article id '.$this->id;
    }

    public function getMainImage(): string
    {
        if ($this->media) {
            return $this->getFirstMediaUrl('main_image_upload');
        }

        if ($this->main_image_upload) {
            return Storage::url($this->main_image_upload);
        }

        if (null !== $this->main_image_url) {
            return $this->main_image_url;
        }

        return '#';
    }
} 