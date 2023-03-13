<?php
$months = [1,2,3,4,5,6,7,8,9,10,11,12];
$data = [];
foreach ($months as $month) {
    $baseSalaryDay = getBaseDay($month);
    $bonusSalaryDay = getBonusDay($month);
    $data[$month][] = date('F', $baseSalaryDay);
    $data[$month][]=  date('d-m-Y', $baseSalaryDay);
    $data[$month][]=  date('d-m-Y', $bonusSalaryDay);
}

function isWeekend($dateTime) {
    $day = date('N', $dateTime);
    if ($day > 5) {
        return true;
    }
    return false;
}

function getBaseDay($month) {
    for ($day = 0; $day < 3; $day++) {
        $lastDay = mktime(1, 1, 1, $month+1, 0-$day);

        if (!(isWeekend($lastDay))) {
            break;
        }
    }
    return $lastDay;
}

function getBonusDay($month, $day = 15) {
    $lastDay = mktime(1, 1, 1, $month, $day);
    if ((!(isWeekend($lastDay)))) {
        return $lastDay;
    }
    return strtotime('next wednesday', $lastDay);
}

?>