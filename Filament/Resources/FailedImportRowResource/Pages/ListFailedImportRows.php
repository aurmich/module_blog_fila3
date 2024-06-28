<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Job\Filament\Resources\FailedImportRowResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\Job\Filament\Resources\FailedImportRowResource;
=======
namespace Modules\Job\Filament\Resources\FailedImportRowResource\Pages;

use Modules\Job\Filament\Resources\FailedImportRowResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
>>>>>>> 21140ac (first)

class ListFailedImportRows extends ListRecords
{
    protected static string $resource = FailedImportRowResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
<<<<<<< HEAD

    public function getTableColumns(): array
    {
        return [
            TextColumn::make('id'),
            TextColumn::make('data'),
            TextColumn::make('import_id'),
            TextColumn::make('validation_error'),
            // $table->timestamps();
        ];
    }

    public function getTableFilters(): array
    {
        return [
        ];
    }

    public function getTableActions(): array
    {
        return [
            Tables\Actions\EditAction::make(),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            // Tables\Actions\BulkActionGroup::make([
            Tables\Actions\DeleteBulkAction::make(),
            // ]),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns($this->getTableColumns())
            ->filters($this->getTableFilters())
            ->actions($this->getTableActions())
            ->bulkActions($this->getTableBulkActions());
    }
=======
>>>>>>> 21140ac (first)
}
