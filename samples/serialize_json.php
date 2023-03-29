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
