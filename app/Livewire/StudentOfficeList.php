<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Office;
use App\Models\StateAdmin;
use App\Models\Student;
use App\Models\UnitAdmin;
use App\Models\User;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;

class StudentOfficeList extends Component implements HasForms, HasTable,HasActions
{
    use InteractsWithForms;
    use InteractsWithActions;
    use InteractsWithTable;



    public function table(Table $table): Table
    {
        $user=auth()->user();
        return $table
            ->query(Office::query())
            ->columns([
                //
                Tables\Columns\TextColumn::make('student.user.name')->label('Student Name')
                ->sortable()->searchable(),
           Tables\Columns\TextColumn::make('unitAdmin.name')->label('Unit')
                ->sortable()->searchable(),
            Tables\Columns\TextColumn::make('stateAdmin.name')->label('State')
                ->sortable()->searchable(),
            Tables\Columns\TextColumn::make('comments.comment')->label('Transfer Comments')
                ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                //
                Action::make('Transfer')
    //
                        ->fillForm(fn (Office $record): array => [
                            'student_id' => $record->student_id,
                            'state_admin_id' => $record->state_admin_id,
                            'unit_admin_id' => $record->unit_admin_id,

                        ])
                    ->form([

                        Select::make('student_id')
                        ->relationship('student','first_name')
                        ->label('Student First Name')
                         ->disabled()
                        ->dehydrated()

                            ,
                        Select::make('student_id')
                        ->relationship('student','last_name')
                        ->label('Student Last Name')
                         ->disabled()
                        ->dehydrated()

                            ,
                        Select::make('stateAdmin')
                        ->label('State')
                        ->relationship('StateAdmin','name')
                        ->searchable()
                                ->required(),

                        Select::make('unitAdmin')->label('Unit')
                        ->relationship('unitAdmin','name')->searchable()
                        ->searchable()
                        ->required() ->helperText('Please make sure this Unit belongs to State selected.'),
                        Repeater::make('comments')->schema([
                            Textarea::make('comment')->required(),
                            // TextInput::make('student_id')->required()->hidden()->default($user->id),
                            TextInput::make('user_id')->required()->hidden()->default($user->id),
                            TextInput::make('role')->required()->hidden()->default($user->role),
                            TextInput::make('action')->required()->hidden()->default('transfer'),
                        ])

                    ])

                    ->action(function (array $data, Office $record): void {
                        $record->student_id = $data['student_id'];
                        $record->state_admin_id = $data['stateAdmin']; // Assuming 'id' is the field you want to save
                        $record->unit_admin_id = $data['unitAdmin'];
                        // $record->saveData($data, $record);
                        foreach ($data['comments'] as $comment) {
                            $newComment = new Comment();
                            $newComment->student_id = $data['student_id'];
                            $newComment->comment = $comment['comment'];
                            $newComment->user_id = $comment['user_id'];
                            $newComment->role = $comment['role'];
                            $newComment->action = $comment['action'];
                            // Add logic here to associate comments with the record or store them as necessary
                            $record->comments()->save($newComment);
                        }
                        $record->save();
                    })


            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    //
                ]),
            ]);
    }

    public function render(): View
    {
        return view('livewire.student-office-list');
    }
    public function saveData(array $data, Office $record): void {
        // Process and save the incoming data
        // For example, assuming 'student_id', 'state_admin_id', 'unit_admin_id' are columns in the 'office' table:

        $record->student_id = $data['student_id'];
        $record->state_admin_id = $data['stateAdmin']['name']; // Assuming 'name' is the field you want to save
        $record->unit_admin_id = $data['unitAdmin']['name']; // Assuming 'name' is the field you want to save

        // Save comments into a separate table linked to this record
        foreach ($data['comments'] as $comment) {
            $newComment = new Comment();
            $newComment->comment = $comment['comment'];
            $newComment->user_id = $comment['user_id'];
            $newComment->role = $comment['role'];
            $newComment->action = $comment['action'];
            // Add logic here to associate comments with the record or store them as necessary
            $record->comments()->save($newComment);
        }

        $record->save(); // Save the record to the 'office' table
    }
}
