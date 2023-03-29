<?php

declare (strict_types = 1);

class Response
{
    public function formalize($data) {
        return json_encode(
            $data,
            JSON_PRETTY_PRINT
        );
    }
}

class Serialize
{
    public function formalize() {}
}
