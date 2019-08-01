<?php
// Adlan Arif Zakaria
// Newsoft IT Solution Sdn Bhd
// Execute: php prime.php -n {value here}

$num = getopt("n:")['n'];

function isPrime($number) { 
    if ($number == 1)
    	return false; 

    for ($i = 2; $i <= sqrt($number); $i++) { 
        if ($number % $i == 0) 
            return false; 
    } 

    return true; 
}

function answer($n) {
	$primes = '2';
	$i = 3;

	while(strlen($primes) < $n+5) {
		if(isPrime($i)) {
			$primes .= $i;
		}
		$i++;
	}

	return substr($primes, $n, 5);
}

echo answer($num);
?> 
