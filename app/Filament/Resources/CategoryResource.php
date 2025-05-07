<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Support\Str;
use Modules\Blog\Filament\Resources\CategoryResource\Pages;
use Modules\Blog\Models\Category;
use Modules\UI\Filament\Forms\Components\IconPicker;
use Modules\Xot\Filament\Resources\XotBaseResource;

class CategoryResource extends XotBaseResource
{
    use Translatable;

    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Content';

    public static function getTranslatableLocales(): array
    {
        return ['it', 'en'];
    }

    public static function getFormFields(): array
    {
        return [
            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(2048)
                ->reactive()
                ->unique()
                ->afterStateUpdated(function (Forms\Set $set, $state): void {
                    $set('slug', Str::slug($state));
                }),
            Forms\Components\TextInput::make('slug')
                ->required()
                ->maxLength(2048),
            Forms\Components\Select::make('parent_id')
                ->label('Categoria Padre')
                ->options(
                    Category::getTreeCategoryOptions()
                )
                ->searchable(),
            Forms\Components\TextInput::make('description')
                ->maxLength(2048),
            SpatieMediaLibraryFileUpload::make('image')
                ->enableOpen()
                ->enableDownload()
                ->columnSpanFull()
                ->collection('category')
                ->disk('uploads')
                ->directory('photos'),
            IconPicker::make('icon')
                ->helperText('Visualizza le icone disponibili di https://heroicons.com/')
                ->columnSpanFull(),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
    public static function form(Form $form): Form
    {
        return $form
            ->schema(static::getFormFields());
=======
>>>>>>> bb321e5 (.)
    /**
     * @return array<string|int,\Filament\Forms\Components\Component>
     */
    public static function getFormSchema(): array
    {
        return static::getFormFields();
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> bb321e5 (.)
    }

=======
>>>>>>> 547f47f (.)
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
