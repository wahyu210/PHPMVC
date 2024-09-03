<?php

use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase
{
    public function testRegex(){

        $path = "/products/12345/categories/abced";
        $pattern = "#^/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)$#";

        // if (preg_match($pattern, $path, $variables)) {
        //     echo var_dump($variables);
        // }
        $result=preg_match($pattern, $path, $variables);
        self::assertEquals(1,$result);
        array_shift($variables);
        var_dump($variables);


    }
}