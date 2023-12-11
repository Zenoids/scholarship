<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Approval;
use App\Models\Comment;
use App\Models\Course;
use App\Models\Office;
use App\Models\StateAdmin;
use App\Models\Student;
use App\Models\UnitAdmin;
use App\Models\User;
use App\Models\Verify;
use Filament\Actions\Action as ActionsAction;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action as ComponentsActionsAction;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action as TablesActionsAction;
use Filament\Tables\Actions\Modal\Actions\Action;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getEloquentQuery(): Builder
    {
               $user = auth()->user(); // Get the authenticated user

        if ((new User())->isStateAdmin()) {
            $stateID = $user->stateadmins->id;
        //     // $stateID=auth()->user()->stateAdmin->state_id;

        return parent::getEloquentQuery()->whereHas('office', function ($query) use ($stateID) {
            $query->where('state_admin_id', $stateID);
        });
                }
        //
        if((new User())->isUnitAdmin()){
            $CID=$user->unitadmins
            ->where('user_id',$user->id)
            ->first()->id
            ;
            // dd($CID);
            return parent::getEloquentQuery()->whereHas('office', function ($query) use ($CID) {
                $query->where('unit_admin_id', $CID);
            });
        }
        if(((new User())->isSuperAdmin())||((new User())->isMarkazAdmin()))
        // if(($user && $user->role=="SuperAdmin")||($user && $user->role=="MarkazAdmin"))
        {
        return parent::getEloquentQuery();
        }

    }

    public static function infolist(Infolist $infolist): Infolist
{
    return $infolist
        ->schema([
        //   TextEntry::make('name'),
        Section::make('Applicant Details')

        ->description('Applicant Personal Details')
        ->schema([

          TextEntry::make('user_id'),
          TextEntry::make('user.email')->label('Email'),
          TextEntry::make('first_name'),
          TextEntry::make('last_name'),
          TextEntry::make('fathers_name'),
          TextEntry::make('adhaar'),
          TextEntry::make('mobile'),
          TextEntry::make('d_o_b')->label('Date of Birth'),
          TextEntry::make('gender'),
          TextEntry::make('religion'),
          TextEntry::make('orphan_disability'),
        ]) ->columns(2)      ->collapsed(),

          Section::make('Address Details')

        ->description('Applicant Address Details')
        ->schema([

          TextEntry::make('addresses.house_number')->label('House Number'),
          TextEntry::make('addresses.tahsil')->label('Tahsil'),
          TextEntry::make('addresses.district')->label('District'),
          TextEntry::make('addresses.state')->label('State'),
          TextEntry::make('addresses.pincode')->label('Pincode'),
          TextEntry::make('addresses.village_area')->label('Village/Area'),
          TextEntry::make('incomes.ac_number')->label('Account Number'),
          TextEntry::make('incomes.name_ac_holder')->label('Name of Bank A/C holder'),
          TextEntry::make('incomes.ifsc')->label('IFSC Code'),
           TextEntry::make('office.stateAdmin.name')->label('JIH State'),
           TextEntry::make('office.unitAdmin.name')->label('JIH Unit'),
        ])->columns(2)     ->collapsed(),

        Section::make('Course Details')
        ->description('Current Course Pursuing Details')
        ->schema([
           TextEntry::make('educations.course.name'),
           TextEntry::make('educations.course_year')->label('Course Year'),
           TextEntry::make('educations.branch_name')->label('Branch Name'),
           TextEntry::make('educations.course_period')->label('Course Period'),
           TextEntry::make('educations.rank_entrance')->label('Entrance Rank'),
           TextEntry::make('educations.institute_name')->label('Institute Name'),
           TextEntry::make('educations.institute_locality')->label('Institute Locality'),
           TextEntry::make('educations.institute_district')->label('Institute District'),
           TextEntry::make('educations.institute_state')->label('Institute State'),
        ])->columns(2)     ->collapsed(),

        Section::make('Previous Course Details')

        ->description('previous Courses Details including 10th, intermediate')
        ->schema([

           TextEntry::make('previous.previous_course_name')->label('Previous Course Name'),
           TextEntry::make('previous.previous_course_subjects')->label('Previous Course Subjects'),
           TextEntry::make('previous.previous_hallticket')->label('Previous Hallticket Number'),
           TextEntry::make('previous.previous_course_institution')->label('Previous Course Institution'),
           TextEntry::make('previous.previous_course_marks')->label('Marks Secured in Last course'),
           TextEntry::make('previous.tenth_subjects')->label('Tenth Subjects'),
           TextEntry::make('previous.tenth_hallticket')->label('Tenth Hallticket'),
           TextEntry::make('previous.tenth_institution')->label('Tenth Institute'),
           TextEntry::make('previous.tenth_marks')->label('Marks secured tenth'),
           TextEntry::make('previous.inter_subjects')->label('Intermediate Subjects '),
           TextEntry::make('previous.inter_hallticket')->label('Intermediate Hallticket Number'),
           TextEntry::make('previous.inter_institution')->label('Intermediate Institution'),
           TextEntry::make('previous.inter_marks')->label('Marks secured Intermediate'),
        ])->columns(2)     ->collapsed(),
        Section::make('Bank & income Details')

        ->description('Student Bank and Houshold income details')
        ->schema([


           TextEntry::make('incomes.name_ac_holder')->label('Name of account holder'),
           TextEntry::make('incomes.bank_name')->label('Name of Bank'),
           TextEntry::make('incomes.ac_branch')->label('Bank account branch'),
           TextEntry::make('incomes.ac_number')->label('Bank Account Number'),
           TextEntry::make('incomes.ifsc')->label('IFSC Code '),
           TextEntry::make('incomes.fathers_occupation')->label('Fathers occupation'),
           TextEntry::make('incomes.fathers_monthly_income')->label('Fathers monthly income'),
           TextEntry::make('incomes.expense_bearer')->label('Expense Bearer'),
           TextEntry::make('incomes.expense_bearer_monthly_income')->label('Expense bearer monthly income'),

        ])->columns(2)     ->collapsed(),
           Section::make('Uploads')

           ->description('Search with the link to see full screen or zoom')
           ->schema([

          TextEntry::make('uploads.image_file_path')->label('student Photo')->formatStateUsing(fn ($state) => asset('storage/' . $state))->columnSpanFull(),
          TextEntry::make('uploads.fees_file_path')->label('Course Fees link')->formatStateUsing(fn ($state) => asset('storage/' . $state))->columnSpanFull(),
          TextEntry::make('uploads.adhaar_file_path')->label('Adhaar Card link')->formatStateUsing(fn ($state) => asset('storage/' . $state))->columnSpanFull(),
          TextEntry::make('uploads.marks_file_path')->label('Previous MarksCard link')->formatStateUsing(fn ($state) => asset('storage/' . $state))->columnSpanFull(),
          TextEntry::make('uploads.passbook_file_path')->label('Bank Passbook link')->formatStateUsing(fn ($state) => asset('storage/' . $state))->columnSpanFull(),
        ])   ->collapsed(),
        Section::make('Uploads images')

        ->description('pdfs are not visible here only images, for pdfs or zoomed images kindly see above section')
        ->schema([
          ImageEntry::make('uploads.image_file_path')->label('student photo')->columnSpanFull()->size(500),
          ImageEntry::make('uploads.fees_file_path')->label('Course Fees')->columnSpanFull()->size(500),
          ImageEntry::make('uploads.adhaar_file_path')->label('Adhaar Card')->columnSpanFull()->size(500),
          ImageEntry::make('uploads.marks_file_path')->label('Marks')->columnSpanFull()->size(500),
          ImageEntry::make('uploads.passbook_file_path')->label('Bank Passbook')->columnSpanFull()->size(500),
                // ->columnSpanFull(),
            ])->collapsed(),

            Section::make('Approval Comments')

            ->description('Find the comments by approveers')
            ->schema([
            //   TextEntry::make('approvals.approval_comment')->label('Comments')->columnSpanFull(),
              TextEntry::make('verify.comment')->label('Verification Comments')->columnSpanFull()
            //   ->state(function (Model $record): string {
            //     $comment='no comments yet';
            //     // foreach ($record->approvals as $approval) {
            //     //     if ($approval->role === 'MarkazAdmin') {
            //     //         $comment = $approval->approval_comment;
            //     //         // break;
            //     //     }
            //     // }
            //     return $comment;
            // }),
                        ,
              TextEntry::make('approvals.approval_comment')->label('Unit Comments')->columnSpanFull()
              ->state(function (Model $record): string {
                $comment='no comments yet';
                foreach ($record->approvals as $approval) {
                    if ($approval->role === 'Unit') {
                        $comment = $approval->approval_comment;
                        // break;
                    }
                }
                return $comment;
            }),
              TextEntry::make('approvals.approval_comment')->label(' State Comments')->columnSpanFull()
              ->state(function (Model $record): string {
                $comment='no comment';
                foreach ($record->approvals as $approval) {
                    if ($approval->role === 'State') {
                        $comment = $approval->approval_comment;
                        // break;
                    }
                }
                return $comment;
            }),
              TextEntry::make('approvals.approval_comment')->label(' Markaz Comments')->columnSpanFull()
              ->state(function (Model $record): string {
                $comment='no comment';
                foreach ($record->approvals as $approval) {
                    if ($approval->role === 'MarkazAdmin') {
                        $comment = $approval->approval_comment;
                        // break;
                    }
                }
                return $comment;
            }),
              TextEntry::make('approvals.approval_comment')->label(' SuperAdmin Comments')->columnSpanFull()
              ->state(function (Model $record): string {
                $comment='no comment';
                foreach ($record->approvals as $approval) {
                    if ($approval->role === 'SuperAdmin') {
                        $comment = $approval->approval_comment;
                        // break;
                    }
                }
                return $comment;
            }),
                    // ->columnSpanFull(),
                ])->collapsed(),
        ]);

}

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                      ]);
    }

    public static function table(Table $table): Table
    {
        $user = auth()->user();

        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('Name')->searchable(),
                Tables\Columns\TextColumn::make('mobile')->searchable(),
                Tables\Columns\TextColumn::make('user.email')->label('Email')->searchable(),
                Tables\Columns\TextColumn::make('addresses.state')->label('State')->searchable(),
                Tables\Columns\TextColumn::make('office.stateAdmin.name')->label('JIH State')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('office.unitAdmin.name')->label('JIH Unit')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('educations.course.name')->label('Course Name')->searchable(),
                Tables\Columns\TextColumn::make('verify.status')->label('Verification Status')
                    // ->state(function (Model $record): string {
                    //     $status = 'Pending';
                    //     // dd($record->verify);
                    //     // foreach ($record->approvals as $approval) {
                    //     //     if ($approval->role === 'MarkazAdmin') {
                    //     //         $status = $approval->approval_status;
                    //     //         // If you only need the first matching approval status, you can break the loop here
                    //     //         break;
                    //     //     }
                    //     // }
                    //     return $status;
                    // })
                    ->color(fn (string $state): string => match ($state) {
                    'Pending' => 'gray',
                    'Approved' => 'success',
                    'Rejected' => 'danger',
                }),
                // if ($record->verify->status === 'Approved'){}
                Tables\Columns\TextColumn::make('Unit_status')->label('Unit Status')
                    ->state(function (Model $record): string {
                        $status = 'pending';
                        foreach ($record->approvals as $approval) {
                            if ($approval->role === 'Unit') {
                                $status = $approval->approval_status;
                                // If you only need the first matching approval status, you can break the loop here
                                break;
                            }
                        }
                        return $status;
                    })->color(fn (string $state): string => match ($state) {
                    'pending' => 'gray',
                    'approved' => 'success',
                    'rejected' => 'danger',
                }),
                Tables\Columns\TextColumn::make('State_status')->label('State Status')
                ->state(function (Model $record): string {
                    $status = 'pending';
        foreach ($record->approvals as $approval) {
            if ($approval->role === 'State') {
                $status = $approval->approval_status;
                // If you only need the first matching approval status, you can break the loop here
                break;
            }
        }
        return $status;
                })->color(fn (string $state): string => match ($state) {
                'pending' => 'gray',
                'approved' => 'success',
                'rejected' => 'danger',
            }),
                Tables\Columns\TextColumn::make('Markaz_status')->label('Markaz Status')
                ->state(function (Model $record): string {
                    $status = 'pending';
        foreach ($record->approvals as $approval) {
            if ($approval->role === 'MarkazAdmin') {
                $status = $approval->approval_status;
                // If you only need the first matching approval status, you can break the loop here
                break;
            }
        }
        return $status;
                })->color(fn (string $state): string => match ($state) {
                'pending' => 'gray',
                'approved' => 'success',
                'rejected' => 'danger',
            }),
                Tables\Columns\TextColumn::make('SuperAdmin_status')->label('SuperADmin Status')
                ->state(function (Model $record): string {
                    $status = 'pending';
        foreach ($record->approvals as $approval) {
            if ($approval->role === 'SuperAdmin') {
                $status = $approval->approval_status;
                // If you only need the first matching approval status, you can break the loop here
                break;
            }
        }
        return $status;
                })->color(fn (string $state): string => match ($state) {
                'pending' => 'gray',
                'approved' => 'success',
                'rejected' => 'danger',
            }),
            ])
            ->filters([
                // SelectFilter::make('office')->relationship('office','state_admin_id')->options(StateAdmin::all()->pluck('name','id'))
                // SelectFilter::make('verified')->relationship('verify','status')->options(Verify::all()->pluck('id','status'))
                // Filter::make('verify.status')
                // SelectFilter::make('Verified')->relationship('verify','status')
                Filter::make("Verified")->query(
                    function (Builder $query) : Builder {
                        return $query->whereHas('verify', function ($subquery) {
                            $subquery->where('status', 'Approved');
                        });
                    }
                )

            ])
            ->actions([
                Tables\Actions\ViewAction::make()->label(false),
                Tables\Actions\Action::make('verify')->label('Verify student')
                    ->form([
                        Select::make('status')
                        ->options([
                            'Pending'=> 'Pending',
                            'Approved' =>'Approved',
                            'Rejected' =>'Rejected'
                        ]) ->live()->required(),

                            Textarea::make('comment')->required(),

                        // Repeater::make('comments')->schema([
                        //     Textarea::make('comment')->required(),
                        //     TextInput::make('user_id')->required()->hidden()->default($user->id),
                        //     TextInput::make('role')->required()->hidden()->default($user->role),
                        //     TextInput::make('action')->required()->hidden()->default('approval'),
                        //                                  ])
                        ])
                    ->action(function (array $data, Student $record): void {
                        // dd($data);

                        $userID=auth()->user();
                        $existingApproval = $record->verify()->where('user_id', $userID->id)->first();
                        $actionData = [
                            'student_id' => $record->id,
                            'user_id' => $userID->id,
                            // 'role' => $userID->role,
                            'status' => $data['status'],
                            'comment' => $data['comment'],
                        ];

                        // Check if 'amount' exists in the $data array
                        // if (isset($data['amount'])) {
                        //     // If 'amount' is present in $data, assign it to the $actionData array
                        //     $actionData['amount'] = $data['amount'];
                        // } else {
                        //     // If 'amount' is not present in $data, leave it empty or assign a default value
                        //     $actionData['amount'] = ''; // You can assign an empty string or a default value as needed
                        // }
                        if ($existingApproval) {
                            // If an existing approval is found, update the existing record
                            $existingApproval->update([
                                'status' => $data['status'],
                                'comment' => $data['comment'],
                                // Update other fields as needed
                            ]);
                        }
                        else{
                            $approval = $record->verify()->create($actionData);
                        }



                        // foreach ($data['comments'] as $comment) {
                        //     $newComment = new Comment([
                        //         'student_id' => $record->id,
                        //         'comment' => $comment['comment'],
                        //         'user_id' => $comment['user_id'],
                        //         'role' => $comment['role'],
                        //         'action' => $comment['action'],
                        //     ]);

                        //     $approval->comments()->save($newComment);
                        // }

                        // Save the changes
                        $record->save();
                        Notification::make()
                        ->title('Status Updated')
                        ->success()
                        ->send();
                    }),
                Tables\Actions\Action::make('Approve Student')->label(false)->icon('heroicon-o-hand-thumb-up')
                    ->form([
                        Select::make('approval_status')
                        ->options([
                            'pending'=> 'pending',
                            'approved' =>'approved',
                            'rejected' =>'rejected'
                        ]) ->live()->required(),
                        TextInput::make('amount')->hidden(fn (Get $get) => $get('approval_status') !== 'approved')->numeric(),
                            Textarea::make('approval_comment')->required(),

                        // Repeater::make('comments')->schema([
                        //     Textarea::make('comment')->required(),
                        //     TextInput::make('user_id')->required()->hidden()->default($user->id),
                        //     TextInput::make('role')->required()->hidden()->default($user->role),
                        //     TextInput::make('action')->required()->hidden()->default('approval'),
                        //                                  ])
                        ])
                    ->action(function (array $data, Student $record): void {
                        // dd($data);

                        $userID=auth()->user();
                        $existingApproval = $record->approvals()->where('user_id', $userID->id)->first();
                        $actionData = [
                            'student_id' => $record->id,
                            'user_id' => $userID->id,
                            'role' => $userID->role,
                            'approval_status' => $data['approval_status'],
                            'approval_comment' => $data['approval_comment'],
                        ];

                        // Check if 'amount' exists in the $data array
                        if (isset($data['amount'])) {
                            // If 'amount' is present in $data, assign it to the $actionData array
                            $actionData['amount'] = $data['amount'];
                        } else {
                            // If 'amount' is not present in $data, leave it empty or assign a default value
                            $actionData['amount'] = ''; // You can assign an empty string or a default value as needed
                        }
                        if ($existingApproval) {
                            // If an existing approval is found, update the existing record
                            $existingApproval->update([
                                'approval_status' => $data['approval_status'],
                                'approval_comment' => $data['approval_comment'],
                                // Update other fields as needed
                            ]);
                        }
                        else{
                            $approval = $record->approvals()->create($actionData);
                        }



                        // foreach ($data['comments'] as $comment) {
                        //     $newComment = new Comment([
                        //         'student_id' => $record->id,
                        //         'comment' => $comment['comment'],
                        //         'user_id' => $comment['user_id'],
                        //         'role' => $comment['role'],
                        //         'action' => $comment['action'],
                        //     ]);

                        //     $approval->comments()->save($newComment);
                        // }

                        // Save the changes
                        $record->save();
                        Notification::make()
                        ->title('Status Updated')
                        ->success()
                        ->send();
                    })
,  Tables\Actions\Action::make('Download')

->url(fn (Student $record): string => route('single.export', $record->id))->openUrlInNewTab()
// ->url(fn (Volunteer $record): string => tap($record, fn($record) => dd($record))->route('exportSingleVolunteer', $record->id))

,

            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     // Tables\Actions\DeleteBulkAction::make(),
                // ]),
                Tables\Actions\BulkAction::make('Download Selected')

                ->action(function (Collection $records) {
                    // Convert the array of IDs to a comma-separated string
                    $idsString = implode(',', $records->pluck('id')->toArray());

                    // Redirect to the select.export route with the string of IDs
                    return redirect()->route('selected.export', ['ids' => $idsString]);
                })
            ])
            ->emptyStateActions([
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
            'index' => Pages\ListStudents::route('/'),
            // 'create' => Pages\CreateStudent::route('/create'),
            // 'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
