<?php

declare (strict_types = 1);

class SomeOne
{
    const LOG_FILE = __DIR__ . '/tests/test_one.log';
    protected static function logVar(object $argument)
    {
        $item = date('Y-m-d') . ':' . var_export($argument, true);
        return error_log($item, 3, self::LOG_FILE);
    }
}

class SomeTwo extends SomeOne
{
    public static function logVar(mixed $argument)
    {
        $item = date('Y-m-d') . ':' . var_export($argument, true);
        return error_log($item, 3, self::LOG_FILE);
    }
}

if (file_exists(SomeOne::LOG_FILE)) {
    unlink(SomeOne::LOG_FILE);
}

$tests = [
    'array' => range('B', 'V'),
    'task' => function () {
        return __CLASS__;
    },
    'unknown' => new class()
{
        public function __invoke()
    {
            return __CLASS__;
        }
    },
];

foreach ($tests as $test) {
    SomeTwo::logVar($test);
}

readfile(SomeOne::LOG_FILE);

echo "\n";
