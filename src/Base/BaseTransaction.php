<?php

namespace SamuelR\LaravelTransactions\Base;

use Exception;
use Illuminate\Support\Facades\DB;

abstract class BaseTransaction
{
    abstract function pre();
    abstract function exec();
    abstract function post();

    /**
     * @throws Exception
     */
    public function fail(Exception $e){
        throw $e;
    }
}