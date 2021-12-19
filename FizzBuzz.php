<?php

/**
 * PHP script to print "Fizz" if a number is divisible by 3, print 
 * "Buzz" if a number is divisible by 5, and print "FizzBuzz" if a number 
 * is divisible by both 3 and 5 for numbers in a given range.
 */
 
class FizzBuzz {
    public function fizz_buzz($targetNum) {
        for ($x = 1; $x < $targetNum + 1; $x++) {
            if (($x % 3 == 0) && ($x % 5 == 0)) {
                print('FizzBuzz' . PHP_EOL);
            }
            elseif ($x % 3 == 0) {
                print('Fizz' . PHP_EOL);
            }
            elseif ($x % 5 == 0) {
                print('Buzz' . PHP_EOL);
            }
            else {
                print($x . PHP_EOL);
            }
        }
    }
}
  
print('Enter range of numbers: ');
$targetNum = intval(fgets(STDIN));
//Create object in order to call class method
$obj = new FizzBuzz();      
$obj->fizz_buzz($targetNum);         
