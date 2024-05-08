<?php

namespace SamuelR\LaravelTransactions\Dispatcher;

use SamuelR\LaravelTransactions\Base\BaseTransaction;

interface ITransactionDispatcher
{
    public static function dispatch(BaseTransaction $transaction);
}