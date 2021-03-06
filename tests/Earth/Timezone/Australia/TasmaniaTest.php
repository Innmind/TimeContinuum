<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\Tasmania,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class TasmaniaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tasmania;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
