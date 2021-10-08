<?php

$currentDirectory = dir('.');

echo 'Caminho Atual: ' . $currentDirectory->path . PHP_EOL;

while ($file = $currentDirectory->read()) {
    echo $file . PHP_EOL;
}
