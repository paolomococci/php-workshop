<?php

declare (strict_types = 1);

class Response
{
    public function render($data)
    {
        return json_encode(
            $data,
            JSON_PRETTY_PRINT
        );
    }
}

class Serialize
{
    public function render(
        $data
    ) {
        return serialize($data);
    }
}

$allowed = [
    'json' => 'Response',
    'text' => 'Serialize',
];

$data = [
    'id' => 123456789,
    'name' => 'something',
    'description' => 'description of something',
    'warehouse' => [
        'stock' => 150,
        'arriving' => 300,
        'unit price' => 0.46,
    ],
];

echo (new $allowed[$_GET['type'] ?? 'json'])->render($data);
echo "\n";
