<?php

namespace SamuelR\LaravelTransactions\Dispatcher;

use Exception;
use Illuminate\Support\Facades\DB;
use SamuelR\LaravelTransactions\Base\BaseTransaction;

class TransactionDispatcher implements ITransactionDispatcher
{
    /**
     * @throws Exception
     */
    public static function dispatch(BaseTransaction $transaction){
        DB::beginTransaction();
        try{
            $transaction->pre();
            $transaction->exec();
            $transaction->post();
        }catch (Exception $e){
            DB::rollBack();
            $transaction->fail($e);
        }
        DB::commit();
    }
}