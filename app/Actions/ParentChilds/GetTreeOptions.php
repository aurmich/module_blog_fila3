<?php

declare(strict_types=1);

namespace Modules\Blog\Actions\ParentChilds;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Kalnoy\Nestedset\NodeTrait;
=======
<<<<<<< HEAD
=======
use Kalnoy\Nestedset\NodeTrait;
>>>>>>> origin/dev
>>>>>>> bb321e5 (.)
use Spatie\QueueableAction\QueueableAction;

class GetTreeOptions
{
    use QueueableAction;

<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function execute(Model $model): array
    {
        // @phpstan-ignore-next-line
=======
>>>>>>> bb321e5 (.)
    /**
     * @param \Illuminate\Database\Eloquent\Model&\Kalnoy\Nestedset\NodeTrait $model
     * @return array
     */
    public function execute(Model $model): array
    {
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> bb321e5 (.)
        $models = $model::tree()->get()->toTree();
        $results = [];
        foreach ($models as $mod) {
            $results[$mod->id] = $mod->title;
            foreach ($mod->children as $child) {
                $results[$child->id] = '--------->'.$child->title;
                foreach ($child->children as $cld) {
                    $results[$cld->id] = '----------------->'.$cld->title;
                    foreach ($cld->children as $c) {
                        $results[$c->id] = '------------------------->'.$c->title;
                    }
                }
            }
        }

        return $results;
    }
}
