<!-- count -->

<?php
$cibo = array('frutta' => array('arancia', 'banana', 'mela'),
              'verdura' => array('carota', 'zucchina', 'piselli'));

// conteggio ricorsivo
echo count($cibp,COUNT_RECURSIVE); // output 8

// conteggio normale
echo count($cibo);                 // output 2

?>