<?php

namespace App\Jobs\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class SendOtpSmsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $phoneNumber;
    protected $otp;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($phoneNumber, $otp)
    {
        $this->phoneNumber = $phoneNumber;
        $this->otp = $otp;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $smsMessage = "[WESOnline] Your verification code is {$this->otp}";

        $response = Http::withHeaders([
            'Accept' => 'application/json,text/plain,*/*',
            'Authorization' => 'Bearer ' . env('SENDCHAMP_API_TOKEN'),
            'Content-Type' => 'application/json'
        ])->post(env('SENDCHAMP_API_URL'), [
            'to' => $this->phoneNumber,
            'message' => $smsMessage,
            'sender_name' => 'Sendchamp',
            'route' => 'dnd'
        ]);

        if ($response->failed()) {
            // Handle the failed request (log it, retry, etc.)
            // Log::error('Failed to send OTP via SMS', ['response' => $response->body()]);
        }
    }
}