<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

/**
 * --
 */
class NotifyTheme extends BaseModel{

    /**
     * @var array<string>
     */
    protected $fillable=[
        'id',
        'lang',
        'type',
        'subject',
        'body',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 468f0a0 (.)
        'body_html',
        'from',
=======
>>>>>>> 42aa20e (.)
=======
        'from',
>>>>>>> 8b046e1 (.)
    ];
}