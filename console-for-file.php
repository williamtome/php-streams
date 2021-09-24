<?php

$newCourse = trim(fgets(STDIN));

file_put_contents('courses.txt', "\n$newCourse", FILE_APPEND);
