<?php

declare (strict_types = 1);

$AAA = array('amount' => 15);
$service = array('service' => $AAA);
$data = array('data' => $service);

echo json_encode($data);
