<?php
/**
 * @author Amir Sanni <amirsanni@gmail.com>
 */
namespace amirsanni\paystacklib;

use amirsanni\paystacklib\Plan;
use amirsanni\paystacklib\Customer;
use amirsanni\paystacklib\Subaccount;
use amirsanni\paystacklib\Transaction;

class Paystack {
    protected $secret_key;
    protected $public_key;
    
    public $transaction;
    public $customer;
    public $subaccount;
    public $plan;
    public $subscription;

    /*
    ********************************************************************************************************************************
    ********************************************************************************************************************************
    ********************************************************************************************************************************
    ********************************************************************************************************************************
    ********************************************************************************************************************************
    */

    public function __construct($data){
        $this->secret_key = $data['secret_key'];
        $this->public_key = $data['public_key'] ?? "";

        //initialise the classes that will be interacting with paystack
        $this->transaction = new Transaction($this->secret_key);
        $this->customer = new Customer($this->secret_key);
        $this->plan = new Plan($this->secret_key);
        $this->subaccount = new Subaccount($this->secret_key);
    }
}