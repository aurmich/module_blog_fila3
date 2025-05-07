<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Fields;

use Filament\Forms\Components\Builder;
use Modules\Blog\Filament\Blocks\Chart;
use Modules\Rating\Filament\Blocks\Rating;
use Modules\UI\Filament\Blocks\Image;
use Modules\UI\Filament\Blocks\ImagesGallery;
use Modules\UI\Filament\Blocks\ImageSpatie;
use Modules\UI\Filament\Blocks\Paragraph;
use Modules\UI\Filament\Blocks\Title;

class ArticleContent
{
    public static function make(
        string $name,
        string $context = 'form',
    ): Builder {
        return Builder::make($name)
            ->blocks([
<<<<<<< HEAD
=======
<<<<<<< HEAD
                Title::make(context: $context),
                Paragraph::make(context: $context),
                // Image::make(context: $context),
                ImageSpatie::make(context: $context),
                ImagesGallery::make(context: $context),
                Rating::make(context: $context),
                Chart::make(context: $context),
=======
>>>>>>> bb321e5 (.)
                Title::make(
    name: 'title'
),
                Paragraph::make(
    name: 'paragraph'
),
                // Image::make(context: $context),
                ImageSpatie::make(
    name: 'image_spatie'
),
                ImagesGallery::make(
    name: 'images_gallery'
),
                Rating::make(
    name: 'rating'
),
                Chart::make(
    name: 'chart'
),
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> bb321e5 (.)
            ])
            ->collapsible();
    }
}
