<?php

declare(strict_types=1);

namespace Modules\User\Contracts;

use Modules\Xot\Contracts\UserContract;

/**
 * ---.
 */
interface UpdatesUserPasswords
{
    public function update(UserContract $userContract, array $input): void;
}
