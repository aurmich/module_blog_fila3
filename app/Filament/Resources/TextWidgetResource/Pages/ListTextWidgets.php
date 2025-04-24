<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources\TextWidgetResource\Pages;

use Filament\Pages\Actions;
use Modules\Blog\Filament\Resources\TextWidgetResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListTextWidgets extends XotBaseListRecords
{
    /**
     * Restituisce le colonne della tabella per il listing dei TextWidget
<<<<<<< HEAD
=======
     * @return array<int, \Filament\Tables\Columns\Column>
     */
    /**
>>>>>>> 032086c (.)
     * @return array<string, mixed>
     */
    public function getListTableColumns(): array
    {
        return [
<<<<<<< HEAD
            'id' => \Filament\Tables\Columns\TextColumn::make('id')->sortable(),
            'key' => \Filament\Tables\Columns\TextColumn::make('key')->searchable(),
            'title' => \Filament\Tables\Columns\TextColumn::make('title')->limit(40),
            'active' => \Filament\Tables\Columns\IconColumn::make('active')->boolean(),
            'created_at' => \Filament\Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
=======
            \Filament\Tables\Columns\TextColumn::make('id')->sortable(),
            \Filament\Tables\Columns\TextColumn::make('key')->searchable(),
            \Filament\Tables\Columns\TextColumn::make('title')->limit(40),
            \Filament\Tables\Columns\IconColumn::make('active')->boolean(),
            \Filament\Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
>>>>>>> 032086c (.)
        ];
    }
    // protected static string $resource = TextWidgetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
