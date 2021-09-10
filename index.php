<?php

require_once 'FileHandle.php';

$courses = new \WilliamT\PhpStreams\FileHandle('courses-list.txt');
echo $courses->readForLine();