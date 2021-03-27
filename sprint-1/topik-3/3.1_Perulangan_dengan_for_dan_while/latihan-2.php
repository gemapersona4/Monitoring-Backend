<?php

$n = 9;

for ($i = 0; $i < $n; $i++) {
	if($i % 2 == 1 ) {
		echo $i . ", ";
	} else {
		continue;
	}
}
echo "\n";
