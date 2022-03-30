<?php

$dest = "." . $_ENV["REQUEST_URI"] . ".php";

if (file_exists($dest)) {
    include_once($dest);
} else {
    header("Location: " . $_ENV["BASE_URL"] . "/404", true, 301);
}
