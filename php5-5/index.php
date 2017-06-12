<?php 

// PHP 5.5 password hashing API is a wrapper around the crypt() method.

$hash = password_hash('changeme', PASSWORD_DEFAULT, ['cost' => 10]);
// PASSWORD_DEFAULT gives a hash password of 60 characters, which could change.  If instead we want to lock the output to a hash of 60 characters then use PASSWORD_BCRYPT (blow fish algorithm).
// ['cost' => 10] How secure we want the hash to be.  Higher the number the stronger the hash. Default is 10.
//var_dump($hash); // gives an encrypted, salted hash.

if (password_verify('changeme', $hash))
{
	var_dump('Password correct');
}

 ?>