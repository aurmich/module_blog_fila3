<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Fields;

use Filament\Forms\Components\Builder;
use Modules\Blog\Filament\Blocks\ArticleList;
use Modules\Blog\Filament\Blocks\BannerAndSlides;
use Modules\Blog\Filament\Blocks\Chart;
use Modules\Blog\Filament\Blocks\Filter;
use Modules\Blog\Filament\Blocks\Image;
use Modules\Blog\Filament\Blocks\ImagesGallery;
use Modules\Blog\Filament\Blocks\Leaderboard;
use Modules\Blog\Filament\Blocks\Search;
use Modules\Blog\Filament\Blocks\Setting;
use Modules\Rating\Filament\Blocks\Rating;
use Modules\UI\Filament\Blocks\Paragraph;
use Modules\UI\Filament\Blocks\Slider;
use Modules\UI\Filament\Blocks\Title;

class PageContent
{
    public static function make(
        string $name,
        string $context = 'form',
    ): Builder {
        return Builder::make($name)
            ->blocks([
                Title::make(context: $context),
                Paragraph::make(context: $context),
                Image::make(context: $context),
                ImagesGallery::make(context: $context),
                // Rating::make(context: $context),
                // Chart::make(context: $context),
                ArticleList::make(context: $context),
                Leaderboard::make(context: $context),
                Setting::make(context: $context),
                Filter::make(context: $context),
                Search::make(context: $context),
                BannerAndSlides::make(context: $context),
                Slider::make(context: $context),
            ])
            ->collapsible();
    }
}
