<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StateAdminResource\Pages;
use App\Filament\Resources\StateAdminResource\RelationManagers;
use App\Models\StateAdmin;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StateAdminResource extends Resource
{
    protected static ?string $model = StateAdmin::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Setting';


    public static function form(Form $form): Form
    {
        $users = User::where('role', 'State')->get()->pluck('name', 'id')->toArray();
        return $form
            ->schema([

                Forms\Components\Select::make('user_id')->options($users)->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('User Name')->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),

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
            'index' => Pages\ListStateAdmins::route('/'),
            'create' => Pages\CreateStateAdmin::route('/create'),
            'edit' => Pages\EditStateAdmin::route('/{record}/edit'),
        ];
    }

    public function mount(): void
    {
        abort_unless(auth()->user()->role == 'SuperAdmin' || auth()->user()->role == 'MarkazAdmin', 403);
    }
    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()->role == 'MarkazAdmin' || auth()->user()->role == 'SuperAdmin';
    }
}
