<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Job\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Carbon;

use function Safe\json_decode;

use Webmozart\Assert\Assert;

/**
 * Modules\Job\Models\Job.
 *
 * @property int         $id
 * @property string      $queue
 * @property array       $payload
 * @property int         $attempts
 * @property int|null    $reserved_at
 * @property int         $available_at
 * @property Carbon      $created_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $updated_at
 * @method static \Modules\Job\Database\Factories\JobFactory factory($count = null, $state = [])
 * @method static Builder|Job                                newModelQuery()
 * @method static Builder|Job                                newQuery()
 * @method static Builder|Job                                query()
 * @method static Builder|Job                                whereAttempts($value)
 * @method static Builder|Job                                whereAvailableAt($value)
 * @method static Builder|Job                                whereCreatedAt($value)
 * @method static Builder|Job                                whereCreatedBy($value)
 * @method static Builder|Job                                whereId($value)
 * @method static Builder|Job                                wherePayload($value)
 * @method static Builder|Job                                whereQueue($value)
 * @method static Builder|Job                                whereReservedAt($value)
 * @method static Builder|Job                                whereUpdatedAt($value)
 * @method static Builder|Job                                whereUpdatedBy($value)
 * @property-read mixed $display_name
 * @mixin \Eloquent
 */
class Job extends BaseModel
{
    protected $fillable = [
        'id',
        'queue',
        'payload',
        'attempts',
        'reserved_at',
        'available_at',
        'created_at',
    ];

    protected $casts = [
        'payload' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        // 'updated_at' => 'datetime:Y-m-d H:00',
        // 'created_at' => 'datetime:Y-m-d',
        // 'created_at' => 'datetime:d/m/Y H:i'
    ];

    public function getTable(): string
    {
        Assert::string($res = config('queue.connections.database.table'));

        return $res;
    }

    public function status(): Attribute
    {
        return Attribute::make(
            get: function () {
                if ($this->reserved_at) {
                    return 'running';
                } else {
                    return 'waiting';
                }
            },
        );
    }

    public function getDisplayNameAttribute()
    {
        $payload = json_decode($this->attributes['payload'], true);

        return $payload['displayName'] ?? null;
    }
}
