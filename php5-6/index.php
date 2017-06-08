<?php 

// PHP 5.5

// Improved constant support
class Foo {
	const BUSINESS_FEE = .02;
	const TAX = .07 + self::BUSINESS_FEE;
}
// echo Foo::TAX;

// Variadic functions:
// any function or method that can accept a variable number of arguments.
// Inversions prior to PHP 5.6 this was handled by using func_get_args(), but in PHP 5.6 it is handled like this:

// First argument should be the object and then accept a variable number of attributes, which will be added (appended) to an array called attributes
function assertObjectHasAttributes($object, ...$attributes)
{
	// var_dump($object, $attributes);
}
assertObjectHasAttributes('object', 'dummy', 'values', 'here', 'a', 'b');

function add(...$numbers)
{
	return array_sum($numbers);
}
// var_dump(add(1, 2, 3, 4, 5));

// Argument unpacking
// In previous versions of PHP a method like this 'call_user_func_array('add', $numbers)' would handle unpacking the arguments of the array.
function sum($x, $y, $z)
{
	return $x + $y + $z;
}
$numbers = [1, 4, 7];

// var_dump(sum(...$numbers)); // Pass the splat operator.

// Importing namespaced functions
namespace Laracasts {
	const TAX = .09;
	function sayHi() { echo 'Hi'; }
}
namespace Laracasts {
	use function Laracasts\sayHi;
	use const Laracasts\Tax;

	sayHi();
	echo Tax;
}

 ?>