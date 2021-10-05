<?php

$myCourses = file('courses-list.txt');
$otherCourses = file('courses.txt');

$csvCourses = fopen('courses-csv.csv', 'w');

foreach ($myCourses as $myCourse) {
    $line = [trim($myCourse), 'sim'];

    fputcsv($csvCourses, $line, ';');
}

foreach ($otherCourses as $course) {
    $line = [trim($course), 'Não'];

    fputcsv($csvCourses, $line, ';');
}

fclose($csvCourses);
