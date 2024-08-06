<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

use Filament\Pages\Page;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

class EnvPage extends Page
{
    use NavigationLabelTrait;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'xot::filament.pages.dashboard';

<<<<<<< HEAD
=======
    protected function getFormSchema(): array
    {
        return [
            TextInput::make('app_url')
                ->label('URL')
                ->placeholder('http://localhost')
                ->helperText('Required for file uploads and other internal configs')
                ->required(),
            Toggle::make('debugbar_enabled')
                ->label('Is Enabled')
                ->helperText('Enable/Disable debug mode to help debug errors'),
        ];
    }

    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema($this->getFormSchema())
            ->columns(2)
            ->statePath('data');
    }

    public function submit()
    {
        $res = EnvData::make()->update($this->data);
        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();
        /*
        dddx([
            'data' => $this->data,
            // 'data1' => $this->form->getState(),
        ]);
        */
    }
>>>>>>> 7d83ae0 (🔧 (EnvPage.php): remove commented out code related to Players form component to clean up the codebase and improve readability)
}
