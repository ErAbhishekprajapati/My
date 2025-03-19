<?php
// Access modifier

class car {
    public $a, $b, $c; // public keyword is an access modifier

    // sum method to add $a and $b but sum method is a method.
    function sum() {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    // sub method to subtract $b from $a
    function sub() {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1 = new car();// declayer this new keyword with class name like this 
$c1->a = 10;
$c1->b = 20;
echo $c1->sum()."\n"; //  print the $c1 sum method call here and add the given logic This will output 30

$c2 = new car();
$c2->a = 20;
$c2->b = 30;
echo "this is sub".$c2->sub()."\n"; // This will output -10
?>
