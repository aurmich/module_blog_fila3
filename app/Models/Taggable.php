<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Illuminate\Support\Arr;

/**
 * Modules\Blog\Models\Taggable.
 *
<<<<<<< HEAD
 * @property int                             $id
 * @property int                             $tag_id
 * @property string                          $taggable_type
 * @property int                             $taggable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property array                           $custom_properties
=======
 * @property int $id
 * @property int $tag_id
 * @property string $taggable_type
 * @property int $taggable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property array $custom_properties
>>>>>>> b1b8a66 (.)
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable query()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereTaggableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereTaggableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable withoutTrashed()
 *
 * @property \Illuminate\Support\Carbon|null $deleted_at
<<<<<<< HEAD
 * @property string|null                     $deleted_by
=======
 * @property string|null $deleted_by
>>>>>>> b1b8a66 (.)
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereDeletedBy($value)
 *
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 *
<<<<<<< HEAD
=======
 * @method static Taggable|null first()
 * @method static \Illuminate\Database\Eloquent\Collection<int, Taggable> get()
 * @method static Taggable create(array $attributes = [])
 * @method static Taggable firstOrCreate(array $attributes = [], array $values = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Taggable where(string|\Closure $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Taggable whereNotNull(string|\Illuminate\Contracts\Database\Query\Expression $columns)
 * @method static int count(string $columns = '*')
 *
>>>>>>> b1b8a66 (.)
 * @mixin \Eloquent
 */
class Taggable extends BaseMorphPivot
{
    /**
     * Undocumented variable.
     *
     * @var string
     */
    protected $table = 'taggables';  // spatie vuol cosi'

    /** @var string */
    protected $connection = 'blog';

    /** @var list<string> */
    protected $fillable = [
        'tag_id',
        'taggable_id',
        'taggable_type',
        'custom_properties',
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'custom_properties' => [],
    ];

    public function withCustomProperties(array $customProperties): self
    {
        // $this->customProperties = $customProperties;
        $this->custom_properties = $customProperties;

        return $this;
    }

    public function hasCustomProperty(string $propertyName): bool
    {
        return Arr::has($this->custom_properties, $propertyName);
    }

    /**
     * Get the value of custom property with the given name.
     *
<<<<<<< HEAD
     * @param mixed|null $default
=======
     * @param  mixed|null  $default
>>>>>>> b1b8a66 (.)
     */
    public function getCustomProperty(string $propertyName, $default = null): mixed
    {
        return Arr::get($this->custom_properties, $propertyName, $default);
    }

    /**
<<<<<<< HEAD
     * @param int|string|float|array|null $value
     *
=======
     * @param  int|string|float|array|null  $value
>>>>>>> b1b8a66 (.)
     * @return $this
     */
    public function setCustomProperty(string $name, $value): self
    {
        $customProperties = $this->custom_properties;

        Arr::set($customProperties, $name, $value);

        $this->custom_properties = $customProperties;

        return $this;
    }

    public function forgetCustomProperty(string $name): self
    {
        $customProperties = $this->custom_properties;

        Arr::forget($customProperties, $name);

        $this->custom_properties = $customProperties;

        return $this;
    }

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'custom_properties' => 'array',
        ];
    }
}
