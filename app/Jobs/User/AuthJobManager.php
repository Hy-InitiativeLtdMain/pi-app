<?php

namespace App\Jobs\User;

use App\Mail\User\Forgot;
use App\Mail\User\Registration;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class AuthJobManager implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    protected $name;
    protected $optional_string;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user, $name = "", ...$optional_string)
    {
        $this->user = $user;
        $this->name = $name;
        $this->optional_string = $optional_string;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
        if ($this->name == "forgot_password") {
            Mail::to($this->user)->send(new Forgot($this->user, $this->optional_string));
        }
        if ($this->name == "new_user") {
            Mail::to($this->user)->send(new Registration($this->user, $this->optional_string));
        }
    }
}
