<?php
require_once ('include/utility.php');

class NumberSample
{
    public function add() {
    	$sum = 0.0;
    	foreach (func_get_args() as $number) {
    		$sum = $sum + $number;
    	}

    	return $sum;
    }
    public function mod($divident, $divisor) {
    	$mod = 0;
    	$mod = $divident % $divisor;

    	return $mod;
    }
    public function div($divident, $divisor) {
    	$mod = 0;
    	$mod = $divident / $divisor;

    	return floor($mod);
    }
}

$ns = new NumberSample();
m($ns->add(1,2,3,4,5,5.1));
m($ns->add(100000000001, 20000000000));
m($ns->add(0.1, 0.7));

m($ns->mod(100000000002, 35));
m($ns->div(10000000000, 2));