<?php

$request = $_ENV["REQUEST_URI"];

if ($request === "/robots.txt") {
    $request = "/robots";
}

$dest = "./pages" . $request . ".php";

if (file_exists($dest)) {
    include_once($dest);
} else {
    header("Location: " . $_ENV["BASE_URL"] . "/404", true, 301);
}
