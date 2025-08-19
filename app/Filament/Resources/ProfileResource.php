<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources;

use Filament\Resources\Concerns\Translatable;
use Modules\Blog\Filament\Resources\ProfileResource\Pages;
use Modules\Blog\Filament\Resources\ProfileResource\RelationManagers;
use Modules\Blog\Models\Profile;
use Modules\User\Filament\Resources\BaseProfileResource;

class ProfileResource extends BaseProfileResource
{
    use Translatable;

    protected static ?string $model = Profile::class;

<<<<<<< HEAD
=======
    /** @return array<string, string> */
>>>>>>> 23a0ba3 (.)
    public static function getRelations(): array
    {
        return [
            RelationManagers\RatingMorphsRelationManager::class,
        ];
    }

<<<<<<< HEAD
=======
    /** @return array<string, \Filament\Resources\Pages\PageRegistration> */
>>>>>>> 23a0ba3 (.)
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
            'view' => Pages\ViewProfile::route('/{record}'),
            // 'getcredits' => Pages\GetCreditProfile::route('/{record}/getcredits'),
        ];
    }
}
