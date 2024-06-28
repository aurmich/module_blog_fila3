<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources;

use Filament\Forms\Form;
<<<<<<< HEAD
=======
use Filament\Tables;
use Filament\Tables\Table;
>>>>>>> 21140ac (first)
use Modules\Job\Filament\Resources\ImportResource\Pages;
use Modules\Job\Models\Import;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ImportResource extends XotBaseResource
{
    protected static ?string $model = Import::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            ]);
    }

<<<<<<< HEAD
=======
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            ])
            ->filters([
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

>>>>>>> 21140ac (first)
    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListImports::route('/'),
            'create' => Pages\CreateImport::route('/create'),
            'edit' => Pages\EditImport::route('/{record}/edit'),
        ];
    }
<<<<<<< HEAD

    public static function getNavigationBadge(): ?string
    {
        return number_format(static::getModel()::count());
    }
=======
>>>>>>> 21140ac (first)
}
