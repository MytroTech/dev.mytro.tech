<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Mail;

class Feedback extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'was_read' => 'boolean',
    ];

    public function send(): void
    {
        Mail::send('emails.feedback', ['feedback'=>$this], static function ($message){
            $subject = "Новая заявка с сайта Олир Резорсиз, ".date('d.m.Y');
            $message->to(config('settings.feedback_email'));
            $message->subject($subject);
        });
    }

}
