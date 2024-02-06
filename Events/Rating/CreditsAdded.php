<?php

declare(strict_types=1);

/**
 * @see https://github.com/cnastasi/event-sourcing-with-laravel/blob/main/app/Events/ProductPurchased.php
 */

namespace Modules\Blog\Events\Rating;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class CreditsAdded extends ShouldBeStored
{
    public function __construct(
        readonly public string $adminId,
        readonly public string $userId,
        readonly public int $credit,
    ) {
    }
}