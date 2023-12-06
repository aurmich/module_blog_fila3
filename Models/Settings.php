<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Modules\Xot\Models\Settings.
 *
 * @property int                             $id
 * @property string                          $group
 * @property string                          $name
 * @property int                             $locked
 * @property mixed                           $payload
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|Settings newModelQuery()
 * @method static Builder|Settings newQuery()
 * @method static Builder|Settings query()
 * @mixin \Eloquent
 */
class Settings extends Model
{
    /**
     * @var array<string>
     */
    public $fillable = [
        'id', 'appname', 'description', 'keywords', 'author',
    ];
}
