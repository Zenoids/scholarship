<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\Select::make('approval_status')->relationship('approvals','approval_status'),
                // RichEditor::make('approval_status')->relationship('approvals','comment'),
                // TextInput::make('approval_amounts')->relationship('amounts','amount'),
                // RichEditor::make('approval_amounts')->relationship('amounts','comment'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name')->label('name'),
                Tables\Columns\TextColumn::make('user_id'),
     Tables\Columns\TextColumn::make('adhaar'),
     Tables\Columns\TextColumn::make('first_name'),
     Tables\Columns\TextColumn::make('last_name'),
     Tables\Columns\TextColumn::make('fathers_name'),
     Tables\Columns\TextColumn::make('mobile'),
     Tables\Columns\TextColumn::make('d_o_b'),
     Tables\Columns\TextColumn::make('gender'),
     Tables\Columns\TextColumn::make('religion'),
     Tables\Columns\TextColumn::make('orphan_disability'),
     Tables\Columns\TextColumn::make('addresses.house_number')->label('House Number'),
     Tables\Columns\TextColumn::make('addresses.tahsil')->label('Tahsil'),
     Tables\Columns\TextColumn::make('addresses.district')->label('District'),
     Tables\Columns\TextColumn::make('addresses.state')->label('State'),
     Tables\Columns\TextColumn::make('addresses.pincode')->label('Pincode'),
     Tables\Columns\TextColumn::make('addresses.village_area')->label('Village/Area'),
     Tables\Columns\TextColumn::make('incomes.ac_number')->label('Account Number'),
     Tables\Columns\TextColumn::make('incomes.name_ac_holder')->label('Name of Bank A/C holder'),
     Tables\Columns\TextColumn::make('incomes.ifsc')->label('IFSC Code'),
    //  Tables\Columns\ImageColumn::make('uploads.adhaar_file_path')->label('adhaar'),
    //  Tables\Columns\ImageColumn::make('uploads.passbook_file_path')->label('passbook'),



    //  Tables\Columns\TextColumn::make('house_number')->relationship('addresses','student_addresses'),
    //  Tables\Columns\TextColumn::make('house_type'),
    //  Tables\Columns\TextColumn::make('district'),
    //  Tables\Columns\TextColumn::make('tahsil'),
    //  Tables\Columns\TextColumn::make('state'),
    //  Tables\Columns\TextColumn::make('pincode'),
    //  Tables\Columns\TextColumn::make('village_area'),

    //  Tables\Columns\TextColumn::make('state_admin_id'),
    //  Tables\Columns\TextColumn::make('unit_admin_id'),

    //  Tables\Columns\TextColumn::make('course_id'),
    //  Tables\Columns\TextColumn::make('course_year'),
    //  Tables\Columns\TextColumn::make('branch_name'),
    //  Tables\Columns\TextColumn::make('course_period'),
    //  Tables\Columns\TextColumn::make('rank_entrance'),
    //  Tables\Columns\TextColumn::make('institute_name'),
    //  Tables\Columns\TextColumn::make('institute_locality'),
    //  Tables\Columns\TextColumn::make('institute_district'),
    //  Tables\Columns\TextColumn::make('institute_state'),


    //  Tables\Columns\TextColumn::make('previous_course_name'),
    //  Tables\Columns\TextColumn::make('previous_course_subjects'),
    //  Tables\Columns\TextColumn::make('previous_hallticket'),
    //  Tables\Columns\TextColumn::make('previous_course_institution'),
    //  Tables\Columns\TextColumn::make('previous_course_marks'),
    //  Tables\Columns\TextColumn::make('tenth_subjects'),
    //  Tables\Columns\TextColumn::make('tenth_hallticket'),
    //  Tables\Columns\TextColumn::make('tenth_institution'),
    //  Tables\Columns\TextColumn::make('tenth_marks'),
    //  Tables\Columns\TextColumn::make('inter_subjects'),
    //  Tables\Columns\TextColumn::make('inter_hallticket'),
    //  Tables\Columns\TextColumn::make('inter_institution'),
    //  Tables\Columns\TextColumn::make('inter_marks'),



    //  Tables\Columns\TextColumn::make('name_ac_holder'),
    //  Tables\Columns\TextColumn::make('ac_number'),
    //  Tables\Columns\TextColumn::make('bank_name'),
    //  Tables\Columns\TextColumn::make('ac_branch'),
    //  Tables\Columns\TextColumn::make('ifsc'),
    //  Tables\Columns\TextColumn::make('fathers_monthly_income'),
    //  Tables\Columns\TextColumn::make('fathers_occupation'),
    //  Tables\Columns\TextColumn::make('expense_bearer'),
    //  Tables\Columns\TextColumn::make('expense_bearer_monthly_income'),

    //  Tables\Columns\TextColumn::make('image_file_path'),
    //  Tables\Columns\TextColumn::make('fees_file_path'),
    //  Tables\Columns\TextColumn::make('adhaar_file_path'),
    //  Tables\Columns\TextColumn::make('marks_file_path'),
    //  Tables\Columns\TextColumn::make('passbook_file_path'),


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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
