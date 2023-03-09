<?php
require_once __DIR__ . '/classes/NewsletterError.php';

function redirect (string $location) : void
{
    header('Location: ' . $location);
    exit;
}

