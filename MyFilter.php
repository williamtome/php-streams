<?php

namespace WilliamT\PhpStreams;

class MyFilter extends \php_user_filter
{
    public $stream;

    public function onCreate()
    {
        $this->stream = fopen('php://temp', 'w+');
        return $this->stream !== false;
    }

    public function filter($in, $out, &$consumed, $closing)
    {
        $_out = '';

        while ($bucket = stream_bucket_make_writeable($in)) {
            $lines = explode("\n", $bucket->data);

            foreach ($lines as $line) {
                if (stripos($line, 'parte') !== false) {
                    $_out .= "$line\n";
                }
            }
        }

        $bucketOut = stream_bucket_new($this->stream, $_out);
        stream_bucket_append($out, $bucketOut);

        return PSFS_PASS_ON;
    }
}
