<?php

echo "Hello World<br />";
echo 'Hello World<br />';

$greeting = "Hello";
$target = "World";
$phrase = $greeting . " " . $target;
echo $phrase;
?>
	<br />
	<?php

echo "$phrase Again<br />";
echo '$phrase Again<br />';
echo "{$phrase}Again<br />";

$v2 = "2";
$v1 = settype($v2,'int');

$v3 = $v2 + $v1;

echo gettype($v1);
?>