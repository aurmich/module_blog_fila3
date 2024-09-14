<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;

// use Modules\Xot\View\Components\XotBaseComponent;

/**
 * .
 */
class Svg extends Component
{
    public function __construct(
        // public Post $article,
        // public bool $showAuthor = false,
<<<<<<< HEAD
        public string $tpl = 'v1',
    ) {
    }
=======
        public string $tpl = 'v1'
    ) {}
>>>>>>> origin/master

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        $view_params = [];

        return view($view, $view_params);
    }
}
