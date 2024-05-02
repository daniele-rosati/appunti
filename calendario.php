<!-- calendario -->

<?php
$num = cal_days_in_month(CAL_GREGORIAN, 8, 2003); // 31
echo "C'erano $num giorni nell'agosto del 2003";
?>

<hr>
<div>
    <?php
    $today = unixtojd(mktime(0, 0, 0, 8, 16, 2003));
    print_r(cal_from_jd($today, CAL_GREGORIAN));
    ?>
</div>