<?php

$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'Discordbot') !== false) {
    // Discord bot → send image
    header('Content-Type: image/png');
    readfile('asset.png');
} else {
    // Normál user → redirect
    header('Location: https://example.com');
    exit();
}
