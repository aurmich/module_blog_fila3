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

<<<<<<< HEAD
<<<<<<< HEAD
    /** @return array<string, string> */
=======
>>>>>>> 7323f69 (.)
=======
>>>>>>> f0a0500 (.)
=======
    
    /**
     * @return array<int, class-string>
     */
>>>>>>> cf118d5 (.)
    public static function getRelations(): array
    {
        return [
            RelationManagers\RatingMorphsRelationManager::class,
        ];
    }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
    /** @return array<string, \Filament\Resources\Pages\PageRegistration> */
=======
>>>>>>> 7323f69 (.)
=======
>>>>>>> f0a0500 (.)
=======
    
    /**
     * @return array<string, \Filament\Resources\Pages\PageRegistration>
     */
>>>>>>> cf118d5 (.)
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
