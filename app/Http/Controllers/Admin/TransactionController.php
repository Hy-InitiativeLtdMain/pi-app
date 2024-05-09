<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\TransactionsResource;
use App\Models\Transaction;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource in order of recency
     */
    public function index()
    {
        // get recent transactions
        $transactions = Transaction::orderBy('created_at', 'desc')->whereIn('user_id', $this->userByInstitute())->get();


        return $this->showAll(TransactionsResource::collection($transactions));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    // get admin balance from transactions
    public function balance()
    {
        $user = auth()->user();
        // get the amount from the transactions and sum
        $amount = Transaction::where('user_id', $user->id)->sum('amount');
        // return the amount
        return $this->showOne($amount);
    }

    private function userByInstitute()
    {
        $institute_slug = auth()->user()->institute_slug;
        // Get users with the same institute_slug
        $users = User::where('institute_slug', $institute_slug)->get();
        // convert the users_id to array
        $users_id = $users->pluck('id')->toArray();

        return $users_id;
    }
}
