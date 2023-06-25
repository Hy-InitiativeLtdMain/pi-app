<?php

namespace App\Jobs\Service;

use App\Mail\Service\Invoice;
use App\Mail\Service\NewLesson;
use App\Mail\Service\Signal;
use App\Services\Admin\BatchService;
use App\Services\Payment\PaystackService;
use App\Services\Push\PushService;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ProcessServices implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $name;
    protected $data;
    protected $optional_string;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name, $data, ...$optional_string)
    {
        $this->name = $name;
        $this->data = $data;
        $this->optional_string = $optional_string;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
        

        if ($this->name == "new_invoice") {
            $transaction = $this->data;
            $user = $transaction->user;
            Mail::to($user)->send(new Invoice($user, $transaction));
            
        }

    }
}
