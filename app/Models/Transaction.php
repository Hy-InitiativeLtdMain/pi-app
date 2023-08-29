<?php

namespace App\Models;

use App\Services\Payment\InvoiceService;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'ref',
        'type',
        'amount',
        'duration',
        'user_id',

        'status',

        'image',
        'image_id',

        'bank_account_id'

    ];

    protected $appends = [
        'paid',
    ];


    public static function boot()
    {
        parent::boot();

        self::updating(function ($transaction) {


            if($transaction->isDirty('status') && $transaction->paid()){


                $_invoiceService = new InvoiceService();
                $_invoiceService->sendMail($transaction);


            }



        });


    }





    public function scopePaid($query)
    {
        $query->where('status', 1);
    }


    /**
     * Get the user that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function totalAmount(): Attribute
    {
        return new Attribute(
            get: function(){
                return $this->amount;
            },
        );
    }




    /**
     * The courses that belong to the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'transaction_course');
    }





    public function paid(): Attribute
    {
        return new Attribute(
            get: function(){
                return $this->status == 1 && Carbon::parse($this->paid_at) >= now()->subMonth($this->duration);
            },
        );
    }
}
