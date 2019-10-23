<?php
declare(strict_types=1);
require __DIR__. '/data.php'; 


function compare($a, $b){
 return strtotime($b['date']) - strtotime($a['date']);
}
