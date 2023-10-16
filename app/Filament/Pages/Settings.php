<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Pages\Page;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $view = 'filament.pages.settings';

protected function getHeaderActions(): array
{
    return [
        // Action::make('edit')
        //     ->url(route('posts.edit', ['post' => $this->post])),
            // Action::make('delete')
            //     ->requiresConfirmation()
            //     ->action(fn () => $this->course->delete()),
    ];

}
public function form(Form $form): Form
{
    return $form
        ->schema([
            TextInput::make('name')
        ]);
}


}
