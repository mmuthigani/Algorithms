<?php

$values = array('14','7','3','12','9','11','6','2');

natsort($values);

$values=array_reverse($values);

echo implode(',',$values); 



