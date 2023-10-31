<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Setting';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->whereNotIn('role', ['Student']);
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->required()->unique('users', 'email'),
                TextInput::make('password')
                    ->password()
                    ->required(),
                Select::make('role')
                    ->options([
                        'Unit' => 'Unit',
                        'State' => 'State',
                        'MarkazAdmin' => 'MarkazAdmin',
                        'SuperAdmin' => 'SuperAdmin'
                    ])->required(),
                TextInput::make('number')->tel(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('email')->searchable()->sortable(),
                TextColumn::make('role')->searchable()->sortable(),
                TextColumn::make('number'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            // 'create' => Pages\CreateUser::route('/create'),
            // 'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
    public function mount(): void
    {
        abort_unless(((new User())->isSuperAdmin())|| ((new User())->isStateAdmin()) || ((new User())->isMarkazAdmin()), 403);
    }
    public static function shouldRegisterNavigation(): bool
    {
        return ((new User())->isSuperAdmin())|| ((new User())->isStateAdmin()) || ((new User())->isMarkazAdmin());
    }
}
