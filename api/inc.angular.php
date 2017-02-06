<?php
header("Content-Type: application/json");

$_POST = json_decode(file_get_contents('php://input'), true);
