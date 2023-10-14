<?php

namespace App\Livewire;

use App\Models\District;
use App\Models\StateAdmin;
use App\Models\User;
use Filament\Forms\Components\Select;
use Livewire\Component;
use Filament\Forms\Components\Section;

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

class AddDistrict extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;
    public function table(Table $table): Table
    {
        return $table
        ->query(District::query())
        ->columns([
            TextColumn::make('name')->searchable()->sortable(),
            TextColumn::make('state.name')->label('State Name')->searchable(),
            // TextColumn::make('user_name')->relationship('users','user_id'),

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
                    ->action(fn (District $record) => $record->delete())

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
        $users = StateAdmin::get()->pluck('name', 'id')->toArray();
        return $form

          ->schema([Section::make('Create state admins')->schema([
                TextInput::make('name')
                ->required()
                ,


                Select::make('state_admin_id')->options($users)->required(),

                // TextInput::make('number')->tel(),

            // ...
        ])

                ]) ->statePath('data');

    }

    public function create(): void
    {
// dd($this->form->getState());
        District::create($this->form->getState());

    }



    public function render()
    {
        return view('livewire.add-district');
    }
}



