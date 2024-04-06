<?php

function isWeekend($date) {
    $weekDay = date('N', strtotime($date));
    return $weekDay == 5 || $weekDay == 6; // 5 is Friday, 6 is Saturday
}

function isHoliday($date) {
    // List of government holidays in Bangladesh for the year 2024
   // List of government holidays in Bangladesh for the year 2024
$holidays = array(
    '2024-01-01', // New Year's Day
     '2024-02-21', // Shahed Day
    '2024-02-26', // Shab-e-Barat
    '2024-03-17', // Sheikh Mujibur Rahman's Birthday
    '2024-03-26', // Independence Day
   
    
    '2024-04-5', // Jumatul Bidah
    '2024-04-07', //Shab-e-Qadar
    '2024-04-10', // Eid ul Fitr
    '2024-04-11', // Eid ul Fitr
    '2024-04-12', // Eid ul Fitr
    '2024-04-14', // Bengali New Year
 
    '2024-05-01', // May Day
  
    '2024-05-22', // Buddha Purnima
   
    '2024-06-16', // Eid-ul-Azha
    '2024-06-17',
    '2024-06-18',
    '2024-07-17', // Ashura
    '2024-08-15', // National Mourning Day
    '2024-08-26', // Jonmastomi 
    '2024-09-16',                   //Eid-e-Miladunnabi
    '2024-10-13',// Durga Puja
    '2024-12-16', // Victory Day
    '2024-12-25', // Christmas Day
);

    
    return in_array($date, $holidays);
}

function countWorkingDays($startDate, $endDate) {
    $workingDays = 0;
    $currentDate = $startDate;
    
    while ($currentDate <= $endDate) {
        if (!isWeekend($currentDate) && !isHoliday($currentDate)) {
            $workingDays++;
        }
        $currentDate = date('Y-m-d', strtotime($currentDate . ' +1 day'));
    }
    
    return $workingDays;
}

$date1 = '2024-04-01';
$date2 = '2024-04-30';
//$date1 = '2024-01-01';year
//$date2 = '2024-12-31';year

$totalWorkingDays = countWorkingDays($date1, $date2);

echo "Total working days in this period: $totalWorkingDays";

?>
