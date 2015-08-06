<?php
$ary = array('KEY1'=>'VALUE1', 'KEY2'=>'VALUE2');

foreach ($ary as $key=>$val) {
    echo $key.':'.$val.'<br>';
}

echo '<hr>';

$ary = array('Java', 'PHP', 'ASP.NET');
for ($i=0; $i<count($ary); $i++) {
    echo $ary[$i].'<br>';
}