<?php

namespace App\Services\User;

use App\Models\Transaction;
use App\Models\TransactionProduct;
use App\Services\Payment\FlutterwaveService;
use App\Services\Payment\PaystackService;
use App\Services\Query\FilteringService;
use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\Builder;

class TransactionService
{
    public function index($inputs)
    {

        $filter = new FilteringService();
        $transactions = Transaction::with(['user',  'courses']);
        $filter->filterColumns($transactions, $inputs);

        if (isset($inputs['general'])) {
            $search = $inputs['general'];
            $transactions = $transactions->whereHas('user', function (Builder $query) use ($search) {
                $query->where(function ($query) use ($search) {
                    $query->where('first_name', 'like', "%{$search}%")
                        ->orWhere('last_name', 'like', "%{$search}%");
                });
            });
        }
        $data['transactions'] = $transactions->latest()->paginate();
        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function indexAll($inputs)
    {

        $transactions = Transaction::with(['user', 'courses']);
        if (isset($inputs['size'])) {
            $transactions = $transactions->limit($inputs['size']);
        }
        if (isset($inputs['order']) && $inputs['order'] == 'desc') {
            $transactions = $transactions->latest();
        }
        $data['transactions'] = $transactions->get();
        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function view(Transaction $transaction)
    {
        $data['transaction'] = $transaction->fresh(['user', 'courses']);
        return [
            'data' => $data,
            'code' => 200
        ];
    }


    public function update(Transaction $transaction, $input)
    {
        if (isset($input['status']) && !!$input['status']) {
            $transaction->status = 1;
            $transaction->paid_at = Carbon::now();
            $transaction->save();
        }
        $transaction->fill($input);
        if ($transaction->isDirty()) {
            $transaction->save();
        }


        $data['message'] = "Transaction updated";
        $data['transaction'] = $transaction;
        return [
            'data' => $data,
            'code' => 200
        ];
    }



    public function delete(Transaction $transaction)
    {

        $transaction->delete();
        $data['message'] = "Deleted Successfully";
        $data['transaction'] = $transaction;
        return [
            'data' => $data,
            'code' => 200
        ];
    }

    public function makePayout(Transaction $transaction)
    {

        $paystackService = new PaystackService();
        // $flutterwaveService = new FlutterwaveService();
        return $paystackService->makePayout($transaction);
    }

    public function verifyOTPPayout(Transaction $transaction, String $otp)
    {

        $paystackService = new PaystackService();
        // $flutterwaveService = new FlutterwaveService();
        return $paystackService->verifyOTPPayout($transaction, $otp);
    }
}
