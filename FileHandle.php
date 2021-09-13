<?php

namespace WilliamT\PhpStreams;

class FileHandle
{
    private $file;
    private $filename;

    public function __construct(string $filename, string $mode)
    {
        $this->filename = $filename;

        $this->validateMode($mode);

        $this->file = fopen($this->filename, $mode);
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

    public function write(string $word)
    {
        fwrite($this->file, $word);
    }

    public function __destruct()
    {
        fclose($this->file);
    }

    private function validateMode(string $mode)
    {
        if (strlen($mode) > 1) {
            throw new \Exception('Modo de abertura inválido.');
        }
    }
}