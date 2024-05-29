<?php

namespace App\Models;

use App\Jobs\Service\ProcessServices;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BankAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_name',
        'account_number',
        'bank_name',
        'bank_code',
        'recipient_code',
    ];


    public static function boot()
    {
        parent::boot();

        

        self::created(function ($bankAccount) {
            $newAccount = (new ProcessServices('verify_bank_account', $bankAccount))->delay(2);
            dispatch($newAccount);
            
        });
    }

    /**
     * Get the user that owns the BankAccount
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
