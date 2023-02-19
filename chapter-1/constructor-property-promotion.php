<?php

declare(strict_types=1);

class Test
{
    public function __construct(
        public int $id,
        public int $token = 0,
        public string $name = ''
    )   
    {
        
    }
}

$test = new Test(199);
var_dump($test);