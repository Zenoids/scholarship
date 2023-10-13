<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Settings extends Page
{
//     public static function shouldRegisterNavigation(): bool
// {
//     $user = auth()->user();
//     return $user->role === 'SuperAdmin' && $user->canManageSettings();
// }
// public function mount(): void
// {
//     $user = auth()->user();
//     abort_unless($user->role === 'SuperAdmin' && $user->canManageSettings(), 403);
// }
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

}

