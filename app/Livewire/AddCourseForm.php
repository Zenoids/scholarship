<?php

namespace App\Livewire;
use App\Models\Course;
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

class AddCourseForm extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;



        public function table(Table $table): Table
    {
        return $table
            ->query(Course::query())
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
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
    ->action(fn (Course $record) => $record->delete())

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
                    ->label('Add Course'),

                // ...
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        Course::create($this->form->getState());
    }


    public function render()
    {
        return view('livewire.add-course-form');
    }
}
