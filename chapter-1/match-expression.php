<?php

function getExpr($grade)
{
    return match($grade) {
        'A+' => 'Best',
        'A' => 'Better',
        'B' => 'Good',
        'C' => 'Need Improvement'
    };
}

$test = ['A+', 'C', 'A', 'B'];

foreach($test as $grade)
{
    echo getExpr($grade) . PHP_EOL;
}