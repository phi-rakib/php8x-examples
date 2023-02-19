<?php

function foo(...$args)
{
    foreach($args as $var)
    {
        echo $var . PHP_EOL;
    }
}

foo(1, 2, 3);
foo(5, 0);