<?php

declare(strict_types=1);

class SomeOne {
    const LOG_FILE = __DIR__ . '/../test/someone.log';
    protected static function logVar(object $v) {
        $item = date('Y-m-d') . ':' . var_export($v, TRUE);
        return error_log($item, 3, self::LOG_FILE);
    }
}

class SomeTwo {}
