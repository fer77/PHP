<?php
// A mechanism for reusing code introduced in PHP 5.4

// Traits can be used across multiple classes.
// It is good to use traits when we dont want to compose or extend a package.

trait OwnerTraits {
	public function owner() {
		return 'fetched owner trait.';
	}
}
// If both of the following methods had an "owner" that can be accessed
class Thread {
	// public function owner() {
	// 	// ..
	// }
	use OwnerTraits;
}
// Now two diffrent classes have the same functionality. Instead refactor the methods so the duplicate code can be reused by diffrent 
class Comment {
	// public function owner() {
	// 	// ..
	// }
	use OwnerTraits;
}

var_dump((new Thread)->owner());
var_dump((new Comment)->owner());

 ?>