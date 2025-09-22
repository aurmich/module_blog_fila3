<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'blog::filament.pages.dashboard';

    // public function mount(): void {
    //     $user = auth()->user();
<<<<<<< HEAD
    //     if(!$user->hasRole('super-admin')){
=======
    //     if(!$user->hasRole('super-admin')/** @phpstan-ignore method.nonObject */){
>>>>>>> b1b8a66 (.)
    //         redirect('/admin');
    //     }
    // }
}
