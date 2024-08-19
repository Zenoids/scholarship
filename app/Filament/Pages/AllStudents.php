<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Forms\Components\Builder;
use Filament\Pages\Page;

class AllStudents extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static string $view = 'filament.pages.all-students';

    protected static ?int $navigationSort= 6;




}
