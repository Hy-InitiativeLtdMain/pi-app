<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\TransactionRequest;
use App\Http\Requests\Util\ReportRequest;
use App\Models\Transaction;
use App\Models\TransactionProduct;
use App\Services\User\TransactionService;
use Illuminate\Http\Request;

class TransactionManager extends Controller
{

    private $transactionService;

    function __construct(TransactionService $transactionService )
    {
        $this->transactionService = $transactionService;
    }

    public function index(Request $request)
    {
        $_data = $this->transactionService->index($request->all());
        return response($_data['data'], $_data['code']);
    }

    public function indexAll(ReportRequest $request)
    {
        $_data = $this->transactionService->indexAll($request->validated());
        return response($_data['data'], $_data['code']);
    }


    public function view(Transaction $transaction)
    {
        $_data = $this->transactionService->view($transaction);
        return response($_data['data'], $_data['code']);
    }

    public function update(TransactionRequest $request, Transaction $transaction)
    {
        $validated = $request->validated();
        $_data = $this->transactionService->update($transaction, $validated);
        return response($_data['data'], $_data['code']);
    }

    


    public function delete(Transaction $transaction)
    {
        $_data = $this->transactionService->delete($transaction);
        return response($_data['data'], $_data['code']);
    }

    public function makePayout(Transaction $transaction)
    {
        $_data = $this->transactionService->makePayout($transaction);
        return response($_data['data'], $_data['code']);
    }
}
