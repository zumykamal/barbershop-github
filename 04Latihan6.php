<?php
$i=0;
echo 'This code will run at least once because i value us 0. <br>';
do {
    echo 'I value is '. $i.',so code block will run <br>';
++$i;
} while ($i<10);
?>