<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Forms\Components\Builder;
use Filament\Pages\Page;

class TransferStudent extends Page
{
    protected static ?string $navigationIcon = 'heroicon-m-arrows-right-left';

    protected static string $view = 'filament.pages.transfer-student';

    public static function shouldRegisterNavigation(): bool
    {
        return ((new User())->isSuperAdmin()) || ((new User())->isMarkazAdmin());
    }

    public function mount(): void
    {
        abort_unless(((new User())->isSuperAdmin()) || ((new User())->isMarkazAdmin()), 403);
    }
}
