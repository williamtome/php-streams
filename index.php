<?php

use WilliamT\PhpStreams\FileHandle;

require_once 'FileHandle.php';

try {
    $courses = new FileHandle('courses.txt', 'a');

    $courses->write("\nabc123");
} catch (\Exception $e) {
    echo "Erro: {$e->getMessage()}";
}
