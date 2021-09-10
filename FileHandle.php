<?php

namespace WilliamT\PhpStreams;

class FileHandle
{
    private $file;
    private $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
        $this->file = fopen($this->filename, 'r');
    }

    public function readAll(): string
    {
        $fileSize = filesize($this->filename);
        return fread($this->file, $fileSize);
    }

    public function readForLine(): string
    {
        $line = null;

        while (!feof($this->file)) {
            $line = fgets($this->file);
        }

        return $line;
    }

    public function __destruct()
    {
        fclose($this->file);
    }
}