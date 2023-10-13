<?php

namespace App\Livewire;
use App\Models\User;
use Filament\Forms\Components\Select;
use Livewire\Component;

// use App\Models\Shop\Product;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Filament\Tables\Actions\Action;

// use Livewire\Component;

class AddUserForm extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;



        public function table(Table $table): Table
    {
        return $table
            ->query(User::query()->whereIn('role', ['State', 'Unit', 'MarkazAdmin', 'SuperAdmin']))
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('email')->searchable()->sortable(),
                TextColumn::make('role')->searchable()->sortable(),
                TextColumn::make('number'),
            ])
            ->filters([
                // ...
            ])
            ->actions([
                // ...
                // Action::make('edit')
    // ->url(fn (Post $record): string => route('posts.edit', $record))
    // ->openUrlInNewTab()

Action::make('delete')
    ->requiresConfirmation()
    ->action(fn (User $record) => $record->delete())

            ])
            ->bulkActions([
                // ...
            ]);
    }
    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form

            ->schema([
                TextInput::make('name')
                    ->required()
                    ,
                    TextInput::make('email')
                    ->required()->unique('users', 'email'),
                    TextInput::make('password')
                    ->password()
                    ->required()
                    ,
                    Select::make('role')
                    ->options([
                        'Unit' => 'Unit',
                        'State' => 'State',
                        'MazkazAdmin' => 'MazkazAdmin',
                        'SuperAdmin' => 'SuperAdmin'
                    ])->required()

                // ...
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        User::create($this->form->getState());
    }



    public function render()
    {
        return view('livewire.add-user-form');
    }
}
