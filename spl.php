<?php

$courses = new SplFileObject('courses-csv.csv');

while (!$courses->eof()) {
    $line = $courses->fgetcsv(';');

    echo $line[0] . PHP_EOL;
}
