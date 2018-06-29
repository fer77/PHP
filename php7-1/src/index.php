<?php

// Nullable and void types:

// class User
// {
//     protected $age;

//     public function age() : ?int
//     {
//         return $this->age;
//     }
// }

// var_dump($age);

// callable: doesn't matter what is given to the function as long as it can be called.
class User {
    public function subscribe(?callable $callback = null)
    {
        var_dump('subscribing...');

        if ($callback) $callback();
    }
}

// (new User)->subscribe(function() {
//     var_dump('responce');
// });
(new User)->subscribe();