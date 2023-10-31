<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UnitAdminResource\Pages;
use App\Filament\Resources\UnitAdminResource\RelationManagers;
use App\Models\District;
use App\Models\UnitAdmin;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UnitAdminResource extends Resource
{
    protected static ?string $model = UnitAdmin::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Setting';


    public static function form(Form $form): Form
    {
        $users = User::get()->pluck('name', 'id')->toArray();
        $districts = District::get()->pluck('name', 'id')->toArray();
        return $form
            ->schema([
                Select::make('user_id')->options($users)->searchable()->required(),
                Select::make('district_id')->options($districts)->searchable()->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('user_id')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('district_id')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('districts.name')->label('District Name')->searchable(),
                Tables\Columns\TextColumn::make('user.name')->label('User assigned')->searchable(),

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
            'index' => Pages\ListUnitAdmins::route('/'),
            // 'create' => Pages\CreateUnitAdmin::route('/create'),
            // 'edit' => Pages\EditUnitAdmin::route('/{record}/edit'),
        ];
    }
    public function mount(): void
    {
        abort_unless(((new User())->isSuperAdmin()) || ((new User())->isMarkazAdmin()), 403);
    }
    public static function shouldRegisterNavigation(): bool
    {
        return ((new User())->isSuperAdmin()) || ((new User())->isMarkazAdmin());
    }
}
