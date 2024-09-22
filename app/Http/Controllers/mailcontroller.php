<?php

namespace App\Http\Controllers;

use App\Services\PHPMailerService;
use Illuminate\Http\Request;

class mailcontroller extends Controller
{
    //
    protected $mailerService;

    public function __construct(PHPMailerService $mailerService)
    {
        $this->mailerService = $mailerService;
    }

    public function sendTestEmail(Request $request)
    {
        $to = 'adolinendemba7@gmail.com';
        $subject = 'Test Email';
        $body = '<p>This is a test email sent using PHPMailer in Laravel.</p>';

        $result = $this->mailerService->send($to, $subject, $body);

        if ($result) {
            return response()->json(['status' => 'Email sent successfully.']);
        } else {
            return response()->json(['status' => 'Failed to send email.'], 500);
        }
    }
}
