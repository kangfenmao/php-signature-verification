<?php

namespace Kangfenmao\SignatureVerification;

class Verify
{
    public static function verify(string $value, string $signature): bool
    {
        $command = dirname(__FILE__).'/../bin/verify';
        exec("$command $value $signature 2>&1", $output, $status);
        return !$status;
    }
}
