<?php

function welcome(?string $name)
{
    echo 'Hello ' . $name . PHP_EOL;
}

welcome('Murad');
welcome(null);
