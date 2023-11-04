<?php

namespace App\Livewire;

use App\Models\Office;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
// use Filament\Actions\Modal\Actions\Action;
use Filament\Actions\Action;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;

use Illuminate\Contracts\View\View;

class TransferForm extends Component implements HasForms, HasActions
{
    use InteractsWithForms;
    use InteractsWithActions;

    public ?array $data = [];

    public function mount()
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        $user=auth()->user();
        return $form
        // ->query(Office::query())
            ->schema([
                //
                Forms\Components\Select::make('student_id')
                // ->relationship('student','first_name')
                ->label('Student First Name')
                 ->disabled()
                ->dehydrated()

                    ,
                Forms\Components\Select::make('student_id')
                // ->relationship('student','last_name')
                ->label('Student Last Name')
                 ->disabled()
                ->dehydrated()

                    ,
                    Forms\Components\Select::make('stateAdmin.name')
                    ->label('State')
                    ->relationship('StateAdmin','name')
                    ->searchable()
                         ->required(),

               Forms\Components\Select::make('unitAdmin.name')->label('Unit')
               ->relationship('unitAdmin','name')->searchable()
                    ->required() ->helperText('Please make sure this Unit belongs to State selected.'),



            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        //
    }
    public Student $student;

    public function deleteAction(): Action
    {
        return Action::make('delete')
            ->requiresConfirmation()
            ->action(fn () => $this->student->delete());
    }

    public function render(): View
    {
        return view('livewire.transfer-form');
    }
}
