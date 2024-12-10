# PHP Unexpected Array Initialization Bug
This repository demonstrates a subtle bug in PHP related to the combination of `isset()`, pass-by-reference, and array initialization. The bug arises from the implicit creation of array elements when a non-existent index is accessed within an `isset()` check when dealing with pass-by-reference.

## Bug Description
The provided `incrementValue` function aims to increment an element in the array.  However, if the index is out of bounds, it first initializes it to 0 then increments it. This, when combined with pass-by-reference, unexpectedly modifies the original array, adding new keys outside the original array's scope.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output.