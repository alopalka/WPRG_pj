<?php
if (isset($_GET['day']) && isset($_GET['month']) && isset($_GET['year'])) {
    $day = $_GET['day'];
    $month = $_GET['month'];
    $year = $_GET['year'];

    if (checkdate($month, $day, $year)) {
        $dayOfWeek = date('l', strtotime("$year-$month-$day"));

        $age = date_diff(date_create("$year-$month-$day"), date_create('today'))->y;

        $nextBirthday = date_create("$year-$month-$day")->modify('+1 year');
        $daysUntilNextBirthday = date_diff(date_create('today'), $nextBirthday)->days;

        echo "<p>You were born on a $dayOfWeek.</p>";
        echo "<p>You are $age years old.</p>";
        echo "<p>There are $daysUntilNextBirthday days until your next birthday.</p>";
    } else {
        echo "<p>Invalid date.</p>";
    }
}
?>
