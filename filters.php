<?php

require 'MyFilter.php';
use WilliamT\PhpStreams\MyFilter;

$coursesFile = fopen('courses-list.txt', 'r');

stream_filter_register('alura.partes', MyFilter::class);
stream_filter_append($coursesFile, 'alura.partes');

echo fread($coursesFile, filesize('courses-list.txt'));
