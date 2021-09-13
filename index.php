<?php

require_once 'FileHandle.php';

try {
    $courses = new \WilliamT\PhpStreams\FileHandle('courses.txt', 'a');

    $courses->write("\nabc123");
} catch (\Exception $e) {
    echo "Erro: {$e->getMessage()}";
}
