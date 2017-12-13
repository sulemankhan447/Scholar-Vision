<?php

$rno = 2;
$sn = "os";
$eid = 1;
$python = `python3 autograder.py $rno $sn $eid`;
echo $python;
?>
