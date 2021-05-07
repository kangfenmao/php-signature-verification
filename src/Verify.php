<?php

namespace Kangfenmao\SignatureVerification;

class Verify
{
  public static function verify(string $value, string $signature): bool
  {
      exec("../bin/verify $value $signature 2>&1", $output, $status);
      return !$status;
  }
}
