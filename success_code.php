<?php
declare(strict_types=1);

function checkAge(int $age): string
{
    if ($age >= 18) {
        return "You are an adult";
    }

    return "You are a minor";
}

echo checkAge(18);