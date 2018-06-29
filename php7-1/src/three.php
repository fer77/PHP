<?php

// catching and responding to multiple exception types 

class ChargeRejected extends Exception {}
class NotEnoughFunds extends Exception {}

class User
{
    public function subscribe()
    {
        throw new NotEnoughFunds;
    }   
}

function flash($message) { var_dump($message); }

try {

    (new User)->subscribe();

} catch (ChargeRejected | NotEnoughFunds $e) {

    flash('Failed');

}