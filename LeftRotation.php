<?php

/**
 * A left rotation operation on an array shifts each of the array's
 * elements 1 unit to the left. For example, if 2 left rotations are
 * performed on array [1,2,3,4,5], then the array would become
 * [3,4,5,1,2]. Note that the lowest index item moves to the highest
 * index in a rotation. This is called a circular array.
 *
 * Given an array a of n integers and a number, d, perform d left
 * rotations on the array. Return the updated array to be printed as a
 * single line of space-separated integers.
 */

class LeftRotation {
    public function left_rot($a, $d) {
        $x = array();
        for ($j=0; $j<count($a); $j++) {
            if ($j < count($a)-1) {
                $x[] = $a[$j+1];
            }
            else {
                array_push($x, $a[0]);
            }
        }
        return $x;
    }
}

print('Enter array of integers (space separated e.g. "1 2 3"): ');
$arr = trim(fgets(STDIN));
$a = array_map('intval', preg_split('/ /', $arr, -1, PREG_SPLIT_NO_EMPTY));
print('Enter no. of rotations: ');
$d = intval(fgets(STDIN));
$c = 0;
$sol = new LeftRotation();
while ($c < $d) {
    $z = $sol->left_rot($a, $d);
    $c = $c + 1;
    $a = $z;
}
$result = implode(" ", $a);
print('Array after '.$d.' left rotations: '.'['.$result.']');
