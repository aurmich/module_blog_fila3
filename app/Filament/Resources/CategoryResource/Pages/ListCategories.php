<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources\CategoryResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
=======
<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBaseListRecords;
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
>>>>>>> origin/dev
>>>>>>> bb321e5 (.)

class ListCategories extends XotBaseListRecords
{
    use ListRecords\Concerns\Translatable;

<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function getListTableColumns(): array
    {
        return [
            Tables\Columns\IconColumn::make('icon')
                ->icon(fn ($state) => $state),
            Tables\Columns\TextColumn::make('title')->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('parent.title')->searchable()
                ->sortable(),
            // Tables\Columns\TextColumn::make('updated_at')
            //     ->sortable()
            //     ->dateTime(),
            SpatieMediaLibraryImageColumn::make('image')->collection('category'),
=======
>>>>>>> bb321e5 (.)
    /**
     * @return array<string, mixed>
     */
    public function getListTableColumns(): array
    {
        return [
            'icon' => Tables\Columns\IconColumn::make('icon')
                ->icon(fn ($state) => $state),
            'title' => Tables\Columns\TextColumn::make('title')
                ->searchable()
                ->sortable(),
            'parent_title' => Tables\Columns\TextColumn::make('parent.title')
                ->searchable()
                ->sortable(),
            'image' => SpatieMediaLibraryImageColumn::make('image')
                ->collection('category'),
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> bb321e5 (.)
        ];
    }

    // public function table(Table $table): Table
    // {
    //     return $table
    //         ->columns($this->getTableColumns())
    //         ->filters([
    //         ])
    //         ->actions([
    //             Tables\Actions\EditAction::make(),
    //             Tables\Actions\DeleteAction::make(),
    //         ])
    //         ->bulkActions([
    //             Tables\Actions\DeleteBulkAction::make(),
    //         ]);
    // }

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
