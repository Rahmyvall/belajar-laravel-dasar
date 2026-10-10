<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    public function testConfig()
    {
        $fitstName = Config('contoh.author.first');
        $lastName = Config('contoh.author.last');
        $email = Config('contoh.email');
        $web =  Config('contoh.web');

        self::assertEquals('Eko', $fitstName);
        self::assertEquals('Khannedy', $lastName);
        self::assertEquals('echo.khannedy@gmail.com', $email);
        self::assertEquals('http://www.programmerzamannow', $web);
    }
}
