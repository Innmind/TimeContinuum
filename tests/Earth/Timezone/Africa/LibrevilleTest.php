<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Libreville,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class LibrevilleTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Libreville;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
