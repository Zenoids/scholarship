<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
           TextEntry::make('offices.state_admin_id')->label('JIH State'),
           TextEntry::make('offices.unit_admin_id')->label('JIH Unit'),
        ])->columns(2)     ->collapsed(),

        Section::make('Course Details')

        ->description('Current Course Pursuing Details')
        ->schema([
           TextEntry::make('educations.course_id')->label('Course Name'),
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
           Section::make('Uploads')

           ->description('Search with the link to see full screen or zoom')
           ->schema([

          TextEntry::make('uploads.fees_file_path')->label('Course Fees link')->formatStateUsing(fn ($state) => asset('storage/' . $state))->columnSpanFull(),
          TextEntry::make('uploads.adhaar_file_path')->label('Adhaar Card link')->formatStateUsing(fn ($state) => asset('storage/' . $state))->columnSpanFull(),
          TextEntry::make('uploads.marks_file_path')->label('Previous MarksCard link')->formatStateUsing(fn ($state) => asset('storage/' . $state))->columnSpanFull(),
          TextEntry::make('uploads.passbook_file_path')->label('Bank Passbook link')->formatStateUsing(fn ($state) => asset('storage/' . $state))->columnSpanFull(),
        ])   ->collapsed(),
        Section::make('Uploads images')

        ->description('pdfs are not visible here only images, for pdfs or zoomed images kindly see above section')
        ->schema([
          ImageEntry::make('uploads.fees_file_path')->label('Course Fees')->columnSpanFull()->size(500),
          ImageEntry::make('uploads.adhaar_file_path')->label('Adhaar Card')->columnSpanFull()->size(500),
          ImageEntry::make('uploads.marks_file_path')->label('Marks')->columnSpanFull()->size(500),
          ImageEntry::make('uploads.passbook_file_path')->label('Bank Passbook')->columnSpanFull()->size(500),
                // ->columnSpanFull(),
            ])->collapsed(),
        ]);

}

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\Select::make('approval_status')->relationship('approvals','approval_status'),
                // RichEditor::make('approval_status')->relationship('approvals','comment'),
                // TextInput::make('user_id'),
                // TextInput::make('user.email')->label('Email'),
                // TextInput::make('first_name'),
                // TextInput::make('last_name'),
                // TextInput::make('fathers_name'),
                // TextInput::make('adhaar'),
                // TextInput::make('mobile'),
                // TextInput::make('d_o_b')->label('Date of Birth'),
                // TextInput::make('gender'),
                // TextInput::make('religion'),
                // TextInput::make('orphan_disability'),
                // TextInput::make('addresses.house_number')->label('House Number'),
                // TextInput::make('addresses.tahsil')->label('Tahsil'),
                // TextInput::make('addresses.district')->label('District'),
                // TextInput::make('addresses.state')->label('State'),
                // TextInput::make('addresses.pincode')->label('Pincode'),
                // TextInput::make('addresses.village_area')->label('Village/Area'),
                // TextInput::make('incomes.ac_number')->label('Account Number'),
                // TextInput::make('incomes.name_ac_holder')->label('Name of Bank A/C holder'),
                // TextInput::make('incomes.ifsc')->label('IFSC Code'),
                // RichEditor::make('approval_amounts')->relationship('amounts','comment'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id'),
                Tables\Columns\TextColumn::make('user.email')->label('Email'),
                Tables\Columns\TextColumn::make('first_name'),
                Tables\Columns\TextColumn::make('last_name'),
                Tables\Columns\TextColumn::make('fathers_name'),
                Tables\Columns\TextColumn::make('adhaar'),
                Tables\Columns\TextColumn::make('mobile'),
                Tables\Columns\TextColumn::make('d_o_b')->label('Date of Birth'),
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
                //  Tables\Columns\ImageColumn::make('uploads.image_file_path')->label('passbook'),
                //  Tables\Columns\ImageColumn::make('uploads.image_file_path')->label('passbook'),
                //  Tables\Columns\ImageColumn::make('uploads.image_file_path')->label('passbook'),
                                 Tables\Columns\ImageColumn::make('uploads.image_file_path')->label('Image'),
                 Tables\Columns\ImageColumn::make('uploads.fees_file_path')->label('Course Fees'),
                 Tables\Columns\ImageColumn::make('uploads.adhaar_file_path')->label('Adhaar Card'),
                 Tables\Columns\ImageColumn::make('uploads.marks_file_path')->label('Marks'),
                 Tables\Columns\ImageColumn::make('uploads.passbook_file_path')->label('Bank Passbook'),



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
                // Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
