<?php

class AtmTransactions {
    public $transaction_id;
    public $date;
    public $type;
    public $amount;
    public $post_balance;

    public function modifies(){
        return false;
    }
}

