<?php

declare(strict_types=1);

namespace Modules\Blog\Projectors;

use Modules\Blog\Events\ArticleRegistered;
use Modules\Blog\Events\ProductReplenished;
use Modules\Blog\Events\RatingArticle;
use Modules\Blog\Models\Article;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class ArticleProjector extends Projector
{
    public function onProductRegistered(ArticleRegistered $event): void
    {
        $data = (array) $event;

        Article::create($data);
    }

    public function onRatingArticle(RatingArticle $event): void
    {
        // Product::withProductId($event->productId)
        //    ->decrementAvailability($event->quantity);

        // $account = Account::uuid($event->aggregateRootUuid());
        // $account->balance += $event->amount;
        // $account->save();
        dddx($event->aggregateRootUuid());
    }

    // public function onProductReplenished(ProductReplenished $event)
    // {
    // Product::withProductId($event->productId)
    //    ->incrementAvailability($event->quantity);
    // }
}