<?php

namespace Tests\Feature;

use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    public function testGetEnv()
    {
        $youtube = env('YOUTUBE');

        self::assertEquals('Eko', $youtube);
    }

    public function testDefaultEnv()
    {
        $author = env('AUTHOR', 'Eko');

        self::assertEquals('Eko', $author);
    }
}
