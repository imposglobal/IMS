<?php 
$warrenty = $_POST['date'];
$pdate = $_POST['pdate'];

function getNextDate($pdate, $warrenty) {
    switch ($warrenty) {
        case '1 Month':
            return date('Y-m-d', strtotime($pdate . ' +1 month'));
        case '2 Months':
            return date('Y-m-d', strtotime($pdate . ' +2 months'));
        case '3 Months':
            return date('Y-m-d', strtotime($pdate . ' +3 months'));
        case '6 Months':
            return date('Y-m-d', strtotime($pdate . ' +6 months'));
        case '1 Year':
            return date('Y-m-d', strtotime($pdate . ' +1 year'));
        case '2 Years':
            return date('Y-m-d', strtotime($pdate . ' +2 years'));
        default:
            return null;
    }
}

$next_date = getNextDate($pdate, $warrenty);
echo "$next_date\n";

?>