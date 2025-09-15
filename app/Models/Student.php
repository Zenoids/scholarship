<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Student extends Model
{
    protected $fillable = [
        'user_id',
        'fathers_name',
        'first_name',
        'last_name',
        'd_o_b',
        'gender',
        'religion',
        'mobile',
        'adhaar',
        'orphan_disability',
        'scholarship_id',
        'renewal'
    ];
    use HasFactory;
    public function units()
    {
        return $this->belongsTo(UnitAdmin::class);
    }
    public function states()
    {
        return $this->belongsTo(StateAdmin::class);
    }
    public function addresses()
    {
        return $this->hasOne(StudentAddress::class);
    }
    public function incomes()
    {
        return $this->hasOne(StudentIncome::class);
    }
    public function educations()
    {
        return $this->hasOne(StudentEducation::class);
    }
    public function previous()
    {
        return $this->hasOne(StudentPreviousEducation::class);
    }
    public function uploads()
    {
        return $this->hasOne(StudentUploads::class);
    }
    public function renewuploads()
    {
        return $this->hasOne(RenewedUpload::class, 'studentId');
    }
    public function approvals()
    {
        return $this->hasMany(Approval::class);
    }
    public function amounts()
    {
        return $this->hasOne(ApprovalAmount::class);
    }
    // public function course(){
    //     return $this->hasOne(Course::class);
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class);
    }
    public function verify()
    {
        return $this->hasOne(Verify::class);
    }
    public function office()
    {
        return $this->hasOne(Office::class);
    }
    //
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    protected static function booted()
    {
        static::updated(function ($student) {
            // Check if the 'renewal' attribute was changed to true
            if ($student->isDirty('renewal') && $student->renewal) {
                $user = $student->user; // Assuming you have a relation to the user
                $userEmail = $user->email;
                $userName = $user->name;

                // Dynamic data for the email
                // $deadline = '30th June 2024'; // Set your deadline
                $supportEmail = 'scholarship@jih.org.in'; // Replace with your support email
                $supportPhone = '+91 7001333502'; // Replace with your support phone
                $organizationName = 'JIH Markaz Scholarship Portal'; // Replace with your organization name

                // Send the email
                Mail::send('emails.renewal_confirmation', [
                    'name' => $userName,
                    // 'deadline' => $deadline,
                    'supportEmail' => $supportEmail,
                    'supportPhone' => $supportPhone,
                    'organizationName' => $organizationName,
                ], function ($message) use ($userEmail, $userName) {
                    $message->to($userEmail, $userName)
                        ->subject('Scholarship Renewal Eligibility');
                });
            }
        });
    }
}
