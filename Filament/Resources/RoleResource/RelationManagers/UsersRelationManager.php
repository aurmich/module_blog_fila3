<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\RoleResource\RelationManagers;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms;
=======
use Filament\Forms\Components\DatePicker;
>>>>>>> 86d4dbee (📝 (UsersRelationManager.php): add DatePicker component to the form for the users relation manager)
=======
use Filament\Forms;
>>>>>>> 1d38b4fa (This code adds several new methods and properties to the `Users` class:)
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
<<<<<<< HEAD
=======
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\Layout\Stack;
>>>>>>> 3fc7f7f9 (.)
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;
use Modules\User\Filament\Resources\UserResource\Pages\ListUsers; // Ensure correct import for ListUsers
use Modules\Xot\Filament\Traits\TransTrait;

final class UsersRelationManager extends RelationManager
{
    use TransTrait;

    protected static string $relationship = 'users';
<<<<<<< HEAD
    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST; // Set the layout view to LIST
=======
    protected static ?string $inverseRelationship = 'roles';
    protected static ?string $recordTitleAttribute = 'name';
    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;
>>>>>>> e08b5451 (refactor(UsersRelationManager): remove unused methods and simplify code structure)

    /**
     * Define the form structure.
     */
    public function form(Form $form): Form
    {
        return $form->schema($this->getFormSchema());
    }

    /**
     * Configure the form schema.
     */
    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            // Additional fields as needed
        ];
    }

    /**
     * Configure the table structure and behavior.
     */
    public function table(Table $table): Table
    {
        return $table
            ->columns($this->layoutView->getTableColumns())
            ->contentGrid($this->layoutView->getTableContentGrid())
            ->headerActions($this->getTableHeaderActions())
            ->filters($this->getTableFilters())
            ->filtersLayout(FiltersLayout::AboveContent)
            ->filtersFormColumns(3)
            ->persistFiltersInSession()
            ->actions($this->getTableActions())
            ->bulkActions($this->getTableBulkActions())
            ->actionsPosition(ActionsPosition::BeforeColumns)
            ->defaultSort('users.created_at', 'desc')
            ->striped()
            ->paginated([10, 25, 50, 100])
            ->poll('60s');
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * Get table columns for grid layout.
=======
     * Get grid layout columns.
>>>>>>> e08b5451 (refactor(UsersRelationManager): remove unused methods and simplify code structure)
     */
    public function getGridTableColumns(): array
    {
        return [
            Stack::make($this->getListTableColumns()),
        ];
    }

    /**
<<<<<<< HEAD
>>>>>>> 3fc7f7f9 (.)
     * Get table columns for list layout.
=======
     * Get list layout columns.
>>>>>>> e08b5451 (refactor(UsersRelationManager): remove unused methods and simplify code structure)
     */
    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('name')
                ->label(__('user::fields.name'))
                ->searchable()
                ->sortable()
                ->copyable(),

            TextColumn::make('email')
                ->label(__('user::fields.email'))
                ->searchable()
                ->sortable()
                ->copyable(),

            TextColumn::make('created_at')
                ->label(__('user::fields.created_at'))
                ->dateTime()
                ->sortable()
                ->toggleable(),

            TextColumn::make('updated_at')
                ->label(__('user::fields.updated_at'))
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

    /**
     * Get header actions.
     */
    protected function getTableHeaderActions(): array
    {
        return [
            TableLayoutToggleTableAction::make(),
            Tables\Actions\AssociateAction::make()
                ->label('')
                ->icon('heroicon-o-link')
                ->tooltip(__('user::actions.associate_user')),
            Tables\Actions\AttachAction::make()
                ->label('')
                ->icon('heroicon-o-paper-clip')
                ->tooltip(__('user::actions.attach_user')),
        ];
    }

    /**
     * Get row-level actions.
     */
    protected function getTableActions(): array
    {
        return [
<<<<<<< HEAD
            Tables\Actions\ViewAction::make()
                ->label('') // Empty label
=======
            ViewAction::make()
                ->label('')
>>>>>>> e08b5451 (refactor(UsersRelationManager): remove unused methods and simplify code structure)
                ->tooltip(__('user::actions.view'))
                ->icon('heroicon-o-eye')
                ->color('info'),

            EditAction::make()
                ->label('')
                ->tooltip(__('user::actions.edit'))
                ->icon('heroicon-o-pencil')
                ->color('warning'),

            Tables\Actions\DetachAction::make()
                ->label('')
                ->tooltip(__('user::actions.detach'))
                ->icon('heroicon-o-link-slash')
                ->color('danger')
                ->requiresConfirmation(),
        ];
    }
<<<<<<< HEAD
=======

    /**
     * Get bulk actions.
     */
    protected function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make()
                ->label('')
                ->tooltip(__('user::actions.delete_selected'))
                ->icon('heroicon-o-trash')
                ->color('danger')
                ->requiresConfirmation(),
        ];
    }

    /**
     * Get filters.
     */
    protected function getTableFilters(): array
    {
        return [
            Filter::make('active')
                ->label(__('user::filters.active_users'))
                ->query(fn (Builder $query): Builder => $query->where('is_active', true))
                ->toggle(),

            Filter::make('created_at')
                ->label(__('user::filters.creation_date'))
                ->form([
                    Forms\Components\DatePicker::make('created_from'),
                    Forms\Components\DatePicker::make('created_until'),
                ])
                ->query(function (Builder $query, array $data): Builder {
                    return $query
                        ->when($data['created_from'], fn (Builder $query, $date) => $query->whereDate('created_at', '>=', $date))
                        ->when($data['created_until'], fn (Builder $query, $date) => $query->whereDate('created_at', '<=', $date));
                })
                ->columns(2),
        ];
    }
<<<<<<< HEAD
>>>>>>> 9705fe34 (up)
=======

    public function getTableFilters(): array
    {
        return [
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Tables\Actions\CreateAction::make()
                ->label('') // Empty label
                ->tooltip(__('Create User')), // Move label to tooltip
            Tables\Actions\AssociateAction::make()
                ->label('') // Empty label
                ->tooltip(__('Associate User')), // Move label to tooltip
        ];
    }

    protected function getTableHeaderActions(): array
    {
        return [
            TableLayoutToggleTableAction::make(),
            Tables\Actions\AssociateAction::make()
                ->label('') // Empty label
                ->icon('heroicon-o-link')
                ->tooltip(__('Associate User')), // Move label to tooltip
            Tables\Actions\AttachAction::make()
                ->label('') // Empty label
                ->icon('heroicon-o-paper-clip')
                ->tooltip(__('Attach User')), // Move label to tooltip
        ];
    }

    protected function getTableActions(): array
    {
        return [
            EditAction::make()
                ->label('') // Empty label
                ->tooltip(__('Edit')), // Move label to tooltip
            DeleteAction::make()
                ->label('') // Empty label
                ->tooltip(__('Delete')), // Move label to tooltip
        ];
    }

    protected function getBulkActions(): array
    {
        return [
            DeleteBulkAction::make()
                ->label('') // Empty label
                ->tooltip(__('Delete Selected')), // Move label to tooltip
        ];
    }
>>>>>>> 737dcebc (This code adds several new methods and properties to the `Users` class:)
}
